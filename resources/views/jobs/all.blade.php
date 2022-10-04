@extends('layouts.main')

<div>
  @section('content')
    <h2>{{ $heading }}</h2>

    <form action="/listings">
      <input type="text" name="search" id="search">
      <input type="submit" value="Search">
    </form>

    <ul class="flex flex-wrap gap-6">
      {{-- @foreach ($listings as $listing)
        <li>
          <x-listing-card :listing="$listing" />
        </li>
      @endforeach --}}
      @forelse ($listings as $listing)
        <li>
          <x-listing-card :listing="$listing" />
        </li>
      @empty
        <li>No listings found :(</li>
      @endforelse
    </ul>
    {{-- @else
    @endif --}}
  @endsection
</div>
