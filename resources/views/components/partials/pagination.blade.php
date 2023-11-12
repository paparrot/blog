<section class="pb-10 flex flex-col md:flex-row gap-2 justify-between font-semibold">
    @if($currentPage > 1)
        <div>
            <a
                href="{{ route('posts.list', ['page' => $currentPage - 1]) }}"
                class="inline-flex items-center justify-center md:justify-start gap-2 w-full md:w-max border-2 rounded-lg py-3 px-6 text-end"
            >
                <span class="w-4 h-4">
                    @svg('heroicon-m-arrow-left')
                </span>
                <span>@lang('settings.pagination.prev')</span>
            </a>
        </div>
    @endif

    @if($currentPage < $lastPage)
        <div>
            <a
                href="{{ route('posts.list', ['page' => $currentPage + 1]) }}"
                class="inline-flex items-center justify-center md:justify-end gap-2 w-full md:w-max border-2 rounded-lg py-3 px-6 text-end"
            >
                <span>
                    @lang('settings.pagination.next')
                </span>
                <span class="w-4 h-4">
                    @svg('heroicon-m-arrow-right')
                </span>
            </a>
        </div>
    @endif
</section>
