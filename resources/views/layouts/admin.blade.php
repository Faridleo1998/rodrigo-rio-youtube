<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex gap-8 bg-white dark:bg-gray-900">
        <x-sidebar class="min-w-fit flex-grow-0 flex-shrink-0 hidden md:block" />
        <main class="mt-4 px-4 w-full grid grid-rows-[1fr_auto]">
            @yield('content')
            <x-footer />
        </main>
    </div>
</body>

</html>
