@extends('layout')

@section('content')
  <form action="/login" method="post">
    @csrf
    <input type="text" name="email" id="email" placeholder="Email:" value={{ old('email') }}>
    @error('email')
      <p>{{ $message }}</p>
    @enderror
    <input type="password" name="password" id="password" placeholder="Password:">
    @error('password')
      <p>{{ $message }}</p>
    @enderror
    <input type="submit" value="Log in">
  </form>
@endsection
