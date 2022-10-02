@props(['listing'])

<a href="/listings/{{ $listing->id }}" aria-label="{{ $listing->title }} job posting link">
  <div class="group bg-slate-900/60 dark:bg-slate-100/10 p-4 py-6 rounded-lg">
    <h3 class="text-2xl font-semibold group-hover:text-rose-400 transition-colors duration-300">{{ $listing->title }}
    </h3>
    <h4 class="text-lg text-slate-400">{{ $listing->company }}</h4>
  </div>
</a>
