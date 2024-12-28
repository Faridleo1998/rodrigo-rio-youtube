@props(['route' => '/', 'name' => 'home', 'label' => 'Home'])

@php
    $classes = 'block py-2 px-3 md:p-0';
    $classes .= request()->routeIs($name)
        ? ' text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700'
        : ' text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent
    ';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes]) }} aria-current="page">{{ $label }}</a>
