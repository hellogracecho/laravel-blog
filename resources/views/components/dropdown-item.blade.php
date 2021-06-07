@props(['active' => false])

@php
    $classes = 'block px-3 text-sm text-left leading-7 hover:bg-blue-400 focus:bg-blue-400 hover:text-white focus:text-white';

    if ($active) {
        $classes .= ' bg-blue-500 text-white';
    }
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>