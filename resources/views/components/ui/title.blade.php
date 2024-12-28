@props(['title', 'route' => null, 'linkText' => 'Crear'])

<div class="flex justify-between my-4">
    <h1 class="text-3xl font-semibold">{{ $title }}</h1>

    @if ($route)
        <x-ui.link :route="$route" :text="$linkText" />
    @endif
</div>
