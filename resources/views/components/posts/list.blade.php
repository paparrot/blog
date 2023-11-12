<article class="flex flex-col gap-1">
    <h2 class="text-xl font-bold hover:underline">
        <a href="{{ route('posts.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
    </h2>
    <p class="text-gray-600">
        {{ $post->summary }}
    </p>
    <div class="mt-2">
        <a
            class="inline-flex  gap-2 text-sm font-semibold items-center text-emerald-700 hover:text-emerald-600"
            href="{{ route('posts.show', ['post' => $post->slug]) }}"
        >
            @lang('settings.posts.read-more')
            <span class="w-4 h-4 stroke-2">
                @svg('heroicon-m-arrow-right')
            </span>
        </a>
    </div>
</article>
