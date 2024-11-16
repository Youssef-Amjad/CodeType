@props(['tags' => []])

@if ($tags->isNotEmpty())
<ul {{ $attributes->merge(['class' => 'flex gap-3 my-10 flex-wrap']) }}>
    <li><h1 class="text-xl font-bold text-neutral-600">Tags: </h1></li>
        @foreach ($tags as $tag)
            <li style="--color: {{ fake()->hexColor() }}">
                <a
                wire:navigate.hover
                href="{{ route('blog.post', $tag) }}"
                class="text-neutral-600 dark:text-neutral-300 font-bold px-2 py-1 rounded-xl border-2 border-[--color] shadow-tag hover:bg-white duration-150"
                >
                <span class="text-xl font-black text-neutral-600 dark:text-neutral-300 -mr-1">#</span>
                    {{ $tag }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
