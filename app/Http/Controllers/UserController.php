<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  public function create()
  {
    return view('register');
  }

  public function store()
  {
    $formFields = request()->validate([
      'name' => ['required'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => 'required|confirmed|min:6',
    ]);

    $formFields['password'] = bcrypt($formFields['password']);

    $user = User::create($formFields);
    auth()->login($user);

    return redirect('/')->with('message', 'User successfully created!');
  }

  public function login()
  {
    return view('login');
  }

  public function authenticate()
  {
    $formFields = request()->validate([
      'email' => ['required', 'email'],
      'password' => 'required',
    ]);

    if (auth()->attempt($formFields)) {
      request()
        ->session()
        ->regenerate();

      return redirect('/')->with('message', "You've successfully been logged in!");
    } else {
      return back()
        ->withErrors([
          'email' => 'Invalid credentials',
        ])
        ->onlyInput('email');
    }
  }

  public function logout()
  {
    auth()->logout();

    request()
      ->session()
      ->invalidate();

    request()
      ->session()
      ->regenerateToken();

    return redirect('/')->with('message', "You've successfully been logged out");
  }
}
