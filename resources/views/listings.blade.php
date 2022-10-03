@extends('layout')

<div>
  @section('content')
    <h2>{{ $heading }}</h2>

    <form action="/listings">
      <input type="text" name="search" id="search">
      <input type="submit" value="Search">
    </form>

    @if (count($listings))
      <ul class="flex flex-wrap gap-6">
        @foreach ($listings as $listing)
          <li>
            <x-listing-card :listing="$listing" />
          </li>
        @endforeach
      </ul>
      <div class="mt-6 p-4">
        {{ $listings->links('pagination::tailwind') }}
      </div>
    @else
      <h3>No listings found :(</h3>
    @endif

  @endsection
</div>
