@extends('layouts.main')

@section('content')
  <div class="w-[1000px] max-w-[85vw] mt-16">
    <h2 class="text-4xl font-semibold">{{ $heading }}</h2>

    <form action="/listings" class="my-7 flex">
      <input class="grow py-2 rounded-none rounded-l-lg border-sky-400" type="text" name="search" id="search">
      <input
        class="bg-sky-400 hover:text-white transition-colors duration-200 rounded-none rounded-r-lg border-sky-400 cursor-pointer"
        type="submit" value="Search">
    </form>

    <ul class="flex flex-col gap-6">
      @forelse ($listings as $listing)
        <li>
          <x-listing-card :listing="$listing" />
        </li>
      @empty
        <li>No listings found :(</li>
      @endforelse
    </ul>
  </div>
@endsection
