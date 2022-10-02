@props(['listing'])

@php
$tag_list = explode(',', $listing->tags);
@endphp

<div class="bg-slate-900/60 p-4 py-6 rounded-lg border-[1px] border-slate-50/25">
  <a href="/listings/{{ $listing->id }}" aria-label="{{ $listing->title }} job posting link">
    <h3 class="text-2xl font-semibold text-slate-50 hover:text-rose-400 duration-300">{{ $listing->title }}
    </h3>
  </a>
  <h4 class="text-lg text-slate-100/60 group-hover:text-slate-100/70 duration-300">{{ $listing->company }}</h4>
  <ul class="flex gap-1 mt-4">
    @foreach ($tag_list as $tag)
      <li class="px-2 py-1 rounded-full bg-slate-600 text-slate-100">
        <a href="/listings?tag={{ $tag }}">{{ $tag }}</a>
      </li>
    @endforeach
  </ul>
</div>
