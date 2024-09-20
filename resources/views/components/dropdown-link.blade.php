@props(['active'])

<a
    {{ $attributes->merge(['class' => 'block px-4 py-2 ' . ($active ? 'bg-chil-blue text-white' : 'hover:bg-chil-red hover:text-white transition duration-300 ease-in-out')]) }}
>
    {{ $slot }}
</a>
