@props(['active' => false])

@php
$classes = 'block rounded-md px-3 text-left text-sm leading-6 hover:bg-black hover:bg-opacitiy-50 hover:text-white focus:bg-blue-500';

if ($active) {
$classes .= ' bg-black bg-opacitiy-50 text-white';
}
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>