@extends('layouts.main')

@php
$tag_list = explode(',', $tags);
@endphp

@section('content')
  <div class="prose">
    <h2>{{ $title }}</h2>
    <h3>{{ $company }}</h3>
    <ul class="flex gap-4 list-none p-0">
      @foreach ($tag_list as $tag)
        <li class="px-2 py-1 rounded-full bg-slate-600 text-slate-100">{{ $tag }}</li>
      @endforeach
    </ul>
    <p class="bg-black/10 p-2 italic">{{ $description }}</p>
    <hr class="my-5">
    <a class="bg-sky-500 hover:bg-sky-400 transition-colors duration-200 p-2 w-fit rounded-lg font-semibold text-slate-50 no-underline"
      href="/listings/{{ $id }}/edit">
      Edit Listing
    </a>
  </div>
@endsection
