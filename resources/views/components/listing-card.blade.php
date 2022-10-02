@props(['listing'])

<a href="/listings/{{ $listing->id }}" aria-label="{{ $listing->title }} job posting link">
  <div class="group bg-slate-900/60 p-4 py-6 rounded-lg border-[1px] border-slate-50/25">
    <h3 class="text-2xl font-semibold text-slate-50 group-hover:text-rose-400 duration-300">{{ $listing->title }}
    </h3>
    <h4 class="text-lg text-slate-100/60 group-hover:text-slate-100/70 duration-300">{{ $listing->company }}</h4>
  </div>
</a>
