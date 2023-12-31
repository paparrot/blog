<article class="flex flex-col gap-6">
    <header class="flex flex-col gap-2">
        <h2 class="text-2xl text-center md:text-start md:text-4xl leading-snug mb-2 font-bold text-gray-900">
            {{ $post->title }}
        </h2>
        <div class="text-sm font-semibold text-gray-500 bg-gray-50 py-2 px-4 rounded shadow flex flex-col space-y-2 md:space-y-0 md:flex-row items-center md:justify-between">
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
    </header>
    <section class="content" id="content">
        {{  \Filament\Support\Markdown::block($post->content) }}
    </section>
</article>

