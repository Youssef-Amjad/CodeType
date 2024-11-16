@props(['src', 'alt' => 'image'])

<img {{ $attributes->merge(['src' => $src, 'alt' => $alt]) }} />
