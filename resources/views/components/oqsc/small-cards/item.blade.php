@props(['title'])

<div class="flex flex-col">
    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
        {{ $title }}
    </dt>
    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-oqsc-text">
        {{ $slot }}
    </dd>
</div>
