<div>
    <h1 class="text-4xl font-bold text-center">
        {{ $post->title }}
    </h1>

    <span class="block mt-2 text-md text-center">
        {{ $post->created_at->diffForHumans() }} - {{ $post->created_at->toDateString() }}
    </span>

    <div class="h-[1px] my-4 bg-stone-300 w-full"></div>

    <article class="mt-4 prose prose-lg max-w-none prose-figcaption:hidden">
        {!! $post->body !!}
    </article>
</div>
