<article class="flex flex-col gap-10">
    <header class="flex flex-col gap-2">
        <h2 class="text-4xl leading-snug font-bold text-gray-900">
            {{ $post->title }}
        </h2>
        <hr>
        <div class="text-sm font-semibold text-gray-500 flex justify-between">
            <time>
                <span>
                    @lang('settings.posts.published-at')
                </span>
                <span>
                    {{ \Illuminate\Support\Carbon::parse($post->published_at)->diffForHumans() }}
                </span>
            </time>
            @if($post->timeToRead)
                <p>
                <span>
                    @lang('settings.posts.time-to-read')
                </span>
                    <span>
                    {{ $post->timeToRead }}
                </span>
                </p>
            @endif
        </div>
        <hr>
    </header>
    <section class="content" id="content">
        {!! $post->content !!}
    </section>
</article>

