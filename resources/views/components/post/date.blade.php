@if ($post->published_at)
    <p class="-mt-6 opacity-75">
        @if (isset($post->community_link))
            Shared on
        @else
            Updated on
        @endif

        <time class="{{ ($post->manually_updated_at ?? $post->published_at)->toDateTimeString() }}">
            {{ $post->presenter()->lastUpdated() }}
        </time>
    </p>
@endif
