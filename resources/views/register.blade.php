@extends('layout')

@section('content')
  <form action="/register" method="post" class="flex flex-col gap-4 w-72">
    @csrf
    <input type="text" name="name" id="name" placeholder="Name:" value={{ old('name') }}>
    @error('name')
      <p class="text-sm text-rose-400">{{ $message }}</p>
    @enderror
    <input type="email" name="email" id="email" placeholder="Email:" value={{ old('email') }}>
    @error('email')
      <p class="text-sm text-rose-400">{{ $message }}</p>
    @enderror
    <input type="password" name="password" id="password" placeholder="Password: " value={{ old('password') }}>
    @error('password')
      <p class="text-sm text-rose-400">{{ $message }}</p>
    @enderror
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password: ">
    @error('password_confirmation')
      <p class="text-sm text-rose-400">{{ $message }}</p>
    @enderror
    <hr>
    <input type="submit" value="Create account" class="bg-sky-400 border-none w-fit px-3 m-auto">
  </form>
@endsection
