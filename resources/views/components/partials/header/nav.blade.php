<nav>
    <ul class="flex flex-wrap uppercase text-xs font-semibold gap-7 text-gray-500 ">
        @foreach(config('settings.menu') as $menu_item)
            <li
                @class([
                    'text-gray-900' => \Illuminate\Support\Facades\Route::is($menu_item['name'])
                ])
                class="hover:text-gray-500">
                <a href="{{ route($menu_item['name']) }}">{{ __($menu_item['title']) }}</a>
            </li>
        @endforeach
    </ul>
</nav>
