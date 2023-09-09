<div class="space-y-8">
    @forelse ($posts as $post)
        <a href="{{ route('show', $post) }}" wire:navigate.hover class="flex h-40 opacity-70 hover:opacity-100">
            <div class="flex items-center">
                <p class="-rotate-90 truncate text-xl">{{ $post->created_at->toDateString() }}</p>
            </div>

            <div>
                <h2 class="text-lg font-bold">{{ $post->title }}</h2>

                <p class="line-clamp-5 mt-2">
                    {{ strip_tags($post->body) }}
                </p>
            </div>
        </a>
    @empty
        <div class="text-xl font-semibold text-center">
            <svg class="w-24 h-24 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>

            <p>No posts yet</p>
            <p class="mt-2">Come back later</p>
        </div>
    @endforelse

    <div x-intersect.margin.20%="@this.dispatch('load-posts')"></div>
</div>
