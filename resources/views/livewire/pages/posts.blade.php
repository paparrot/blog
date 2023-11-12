<div>
    <section class="flex flex-col gap-1">
        <h1 class="text-2xl font-extrabold">
            {{ __('settings.posts.list.title') }}
        </h1>
        <p class="content text-lg text-gray-900">
            {{ __('settings.posts.list.subtitle') }}
        </p>
    </section>

    <section class="py-10 flex flex-col gap-10">
        @foreach($posts as $post)
            <x-posts.list :post="$post" />
        @endforeach
    </section>

    <x-partials.pagination :current-page="$posts->currentPage()" :lastPage="$posts->lastPage()" />

</div>
