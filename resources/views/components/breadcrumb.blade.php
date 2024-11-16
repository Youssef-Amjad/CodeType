<nav {{ $attributes->merge(['class' => 'flex items-center gap-1.5 text-sm sm:text-base text-[#1E83E7]']) }}>
    <a wire:navigate.hover href="{{ route('home') }}" class="font-medium underline">
        Home
    </a>

    <span class="font-medium opacity-40">/</span>

    @if (!empty($middle))
        @if ($middle->attributes->has('href'))
            <a wire:navigate.hover {{ $middle->attributes->merge(['class' => 'font-medium underline']) }}>
                {{ $middle }}
            </a>
        @else
            <span {{ $middle->attributes->merge(['class' => 'font-medium opacity-30']) }}>
                {{ $middle }}
            </span>
        @endif
        <span class="font-medium opacity-40">/</span>
    @endif

    <div class="line-clamp-1">
        {{ $slot }}
    </div>
</nav>
