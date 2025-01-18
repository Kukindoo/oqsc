@props(['variant' => 'default'])

@if($variant === 'default')
    <div class="bg-oqsc-bg py-24 sm:py-32" {{ $attributes }}>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
@elseif($variant === 'isolated')
    <div class="relative isolate px-6 pt-14 lg:px-8" {{ $attributes }}>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            {{ $slot }}
        </div>
    </div>
@elseif($variant === 'isolated-wide')
    <div class="relative isolate bg-oqsc-bg pb-32 pt-24 sm:pt-32" {{ $attributes }}>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
@endif
