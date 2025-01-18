@props(['variant' => 'grid'])

@php
    $classes = [
        'grid' => 'grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6',
        'single' => 'grid-cols-1',
    ];
@endphp

<ul role="list"
    {{ $attributes->merge(['class' => 'mx-auto mt-20 grid ' . $classes[$variant]
        . ' max-w-2xl gap-x-8 gap-y-16 text-center lg:mx-0 lg:max-w-none' ]) }}>
    {{ $slot }}
</ul>
