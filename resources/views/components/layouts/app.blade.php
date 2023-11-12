<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<x-partials.head/>
<body class="max-w-screen-md min-h-screen px-10 mx-auto flex flex-col">
<x-partials.header />
<main id="content" class="grow">
    {{ $slot }}
</main>
<x-partials.footer/>
</body>
</html>
