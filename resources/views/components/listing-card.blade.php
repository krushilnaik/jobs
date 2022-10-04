@props(['listing'])

@php
$tag_list = explode(',', $listing->tags);
@endphp

<div class="bg-sky-500 p-4 py-6 rounded-lg border-[1px] border-slate-50/25">
  <a href="/listings/{{ $listing->id }}" aria-label="{{ $listing->title }} job posting link">
    <h3 class="text-2xl font-semibold text-slate-50 hover:text-sky-300 duration-300">{{ $listing->title }}
    </h3>
  </a>
  <h4 class="text-lg text-white/70">{{ $listing->company }}</h4>
  <ul class="flex gap-1 mt-4">
    @foreach ($tag_list as $tag)
      <li class="px-2 py-1 rounded-full bg-sky-600 hover:bg-sky-400 transition-colors hover:duration-300 text-slate-100">
        <a href="/listings?tag={{ $tag }}">{{ $tag }}</a>
      </li>
    @endforeach
  </ul>
</div>
