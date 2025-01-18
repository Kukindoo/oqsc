@props(['src', 'name', 'position'])

<li>
    <img class="mx-auto size-24 rounded-full"
         src="{{ $src }}"
         alt="picture of {{ $name }}"
         >
    <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">{{ $name }}</h3>
    <p class="text-sm/6 text-oqsc-text">{{ $position }}</p>
</li>



