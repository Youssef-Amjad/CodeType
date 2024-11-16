@props(['href', 'active'])

<a href="{{ $href }}" @class(['side-link', 'active' => $active])>
    {{ $svg }}
</a>
