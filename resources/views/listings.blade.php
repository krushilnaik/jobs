@extends('layout')

@section('content')
  <h2>
    <?php echo $heading; ?>
  </h2>

  @if (count($listings))
    @foreach ($listings as $listing)
      <a href="/listings/{{ $listing->id }}">
        <h3>{{ $listing->title }}</h3>
      </a>
    @endforeach
  @else
    <h3>No listings found :(</h3>
  @endif
@endsection
