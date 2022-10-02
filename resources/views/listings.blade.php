<h1>
  <?php echo $heading; ?>
</h1>

@if (count($listings))
  @foreach ($listings as $listing)
    <a href="/listings/{{ $listing['id'] }}">
      <h2>{{ $listing['title'] }}</h2>
    </a>
    {{-- <p>{{ $listing['description'] }}</p> --}}
  @endforeach
@else
  <h2>No listings found :(</h2>
@endif
