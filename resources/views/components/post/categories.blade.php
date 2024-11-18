@props(['categories' => []])

@if ($categories->isNotEmpty())
    <ul {{ $attributes->merge(['class' => 'flex gap-2.5 my-3 flex-wrap']) }}>
        @foreach ($categories as $category)
            <li>
                <a
                    wire:navigate.hover
                    href="{{ route('blog.article', $category->slug) }}"
                    class="text-sm text-[--bg-color] font-bold px-2 py-1 rounded-md bg-white border border-[--bg-color] shadow-md shadow-[--bg-color] hover:bg-[--bg-color] hover:text-white duration-150"
                    style="--bg-color: {{ $category->presenter()->color() }}"
                >
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
