<div class="text-xs font-semibold text-gray-500 order-1 sm:order-2">
    <ul class="flex sm:justify-end gap-5">
        @foreach(config('settings.socials') as $social_item)
            <li>
                <a class="hover:text-gray-500 flex items-center" href="{{ $social_item['link'] }}" target="_blank"
                   rel="noopener noreferrer">
                    <span class="mr-2 w-4 h-4 stroke-2">
                        @svg($social_item['icon'])
                    </span>
                    {{ $social_item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
