<div class="sub-pages">
    @if ($children->count() > 0)

        @foreach ($children as $child)
            <div class="media">
                <a class="media-left" href="{{ url($child->slug) }}">
                    @if ($child->attributes->thumbnail_image)
                        <img src="{{ url($child->attributes->thumbnail_image->resizeUrl(100)) }}">
                    @endif
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="{{ url($child->slug) }}">{{ $child->name }}</a></h4>
                </div>
            </div>
        @endforeach

        {{ $children->links() }}
    @endif
</div>