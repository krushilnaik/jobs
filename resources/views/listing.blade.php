@extends('layout')

@php
$tag_list = explode(',', $tags);
@endphp

@section('content')
  <div class="prose">
    <h2>Position: {{ $title }}</h2>
    <h3>Company: {{ $company }}</h3>
    <h4 class="font-bold">Tech Stack: </h4>
    <ul class="flex gap-4 list-none">
      @foreach ($tag_list as $tag)
        <li class="px-2 py-1 rounded-full bg-slate-600 text-slate-100">{{ $tag }}</li>
      @endforeach
    </ul>
    <span>Job Description: </span>
    <p>{{ $description }}</p>
    <hr class="my-5">
    <a class="bg-sky-500 p-2 w-fit rounded-lg font-semibold text-slate-100 no-underline"
      href="/listings/{{ $id }}/edit">
      Edit Listing
    </a>
  </div>
@endsection
