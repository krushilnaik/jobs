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
}
