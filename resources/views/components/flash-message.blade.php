@if (session()->has('message'))
  <div class="fixed top-0 left-1/2 -translate-x-1/2 transform bg-sky-500 text-white px-8 py-3 w-max rounded-b-xl">
    <p>{{ session('message') }}</p>
  </div>
@endif
