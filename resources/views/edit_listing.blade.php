@extends('layout')

@section('content')
  <form action="/listings/{{ $id }}" method="POST" class="flex flex-col gap-4 w-96">
    @csrf
    @method('PUT')
    <input type="text" name="title" id="title" placeholder="Title:" value="{{ $title }}" required>
    <input type="text" name="company" id="company" placeholder="Company:" value="{{ $company }}" required>
    <input type="text" name="location" id="location" placeholder="Location:" value="{{ $location }}" required>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description:">{{ $description }}</textarea>
    <input type="text" name="tags" id="tags" placeholder="Tags (comma-separated, no spaces):"
      value="{{ $tags }}" required>
    <input type="submit" value="Post job" class="w-fit m-auto text-xl p-3 py-2 bg-sky-400 border-none cursor-pointer">
  </form>
@endsection
