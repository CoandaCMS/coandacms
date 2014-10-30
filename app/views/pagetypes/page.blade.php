<h1>{{ $attributes->name }}</h1>

{{ $attributes->content }}

@if (!$attributes->hide_sub_pages)

	@include('includes.subpages', [ 'children' => Coanda::pages()->query()->in($page->id)->paginate(20)->get() ])

@endif
