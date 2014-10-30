<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Coanda CMS</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if (!isset($breadcrumb[0])) class="active" @endif><a class="first" href="{{ url('/') }}">Home</a></li>

                @foreach (Coanda::pages()->query()->take(5)->get() as $page)
                    <li @if (isset($breadcrumb[0]) && $breadcrumb[0]['identifier'] == 'pages:page-' . $page->id) class="active" @endif><a href="{{ url($page->slug) }}">{{ $page->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>