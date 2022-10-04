@extends('layouts.main')

@section('content')
  <div class="flex flex-col gap-6">
    <h2 class="text-5xl font-semibold">Welcome to <span class="text-sky-400 font-bold">Jobs</span></h2>
    <div class="flex gap-4">
      <a href="/listings"
        class="text-slate-100 bg-sky-500 hover:bg-sky-400 hover:duration-300 w-fit p-3 rounded-lg font-semibold">
        Start browsing
      </a>
      <a href="/listings/create"
        class="text-sky-500 border-2 border-transparent hover:border-sky-400 hover:duration-300 w-fit p-3 rounded-lg font-semibold">
        Post a job
      </a>
    </div>
  </div>
@endsection
