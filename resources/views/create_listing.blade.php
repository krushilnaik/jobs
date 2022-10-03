@extends('layout')

@section('content')
  <form action="/listings/create" method="post" class="flex flex-col gap-4 w-96">
    @csrf
    <input type="text" name="title" id="title" placeholder="Title:" required>
    <input type="text" name="company" id="company" placeholder="Company:" required>
    <input type="text" name="location" id="location" placeholder="Location:" required>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description:"></textarea>
    <input type="text" name="tags" id="tags" placeholder="Tags (comma-separated, no spaces):" required>
    <input type="email" name="email" id="email" placeholder="Email:" required>
    <input type="url" name="website" id="website" placeholder="Website:" required>
    <input type="submit" value="Post job" class="w-fit m-auto text-xl p-3 py-2 bg-sky-400 border-none cursor-pointer">
  </form>
@endsection
