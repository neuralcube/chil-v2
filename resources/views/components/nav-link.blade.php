@props(['active' => false])

<a
{{ $attributes->merge([
    'class' => 'block py-2 px-3 md:p-0 rounded text-gray-900 ' . ($active ? 'text-white bg-chil-blue md:bg-transparent md:text-blue-700' : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-chil-red ')
    ]) }}

    aria-current="{{$active ? 'page': false}}"">

    {{ $slot }}
</a>



