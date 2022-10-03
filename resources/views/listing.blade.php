@extends('layout')

@php
$tag_list = explode(',', $tags);
@endphp

@section('content')
  <h2>{{ $title }}</h2>
  <h3>{{ $company }}</h3>
  <ul class="flex gap-4">
    @foreach ($tag_list as $tag)
      <li class="px-2 py-1 rounded-full bg-slate-600 text-slate-100">{{ $tag }}</li>
    @endforeach
  </ul>
  <p>{{ $description }}</p>
  <a href="/listings/{{ $id }}/edit">Edit Listing</a>
@endsection
