<a href="{{ route('home') }}">
    @if(\Illuminate\Support\Facades\Route::is('home'))
        <h1 class="text-center sm:text-left text-4xl font-extrabold text-gray-800 ">{{ env("APP_NAME") }}</h1>
    @else
        <h3 class="text-center sm:text-left text-4xl font-extrabold text-gray-800 ">{{ env("APP_NAME") }}</h3>
    @endif
</a>
