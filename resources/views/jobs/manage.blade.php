@extends('layouts.main')

@section('content')
  <div class="flex flex-col gap-4">
    <h2 class="text-4xl">My listings</h2>
    <ul class="w-[1000px] max-w-[85vw] flex flex-col gap-4">
      @forelse ($listings as $listing)
        <li>
          <x-listing-card :listing="$listing" />
        </li>
      @empty
        <li>You haven't posted any listings yet.</li>
      @endforelse
    </ul>
  </div>
@endsection
