
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @if(Auth::check())
            @if(Auth::user()->is_admin)
                <a class="p-2 font-weight-bold text-danger" href="{{ route('categories.index') }}">All Categories</a>
            @endif
        @endif
        @foreach ($newsCategory as $title)
            <a class="p-2 text-muted" href="{{ route('singleCat', ['cat' => $title->id]) }}">{{ $title->categories }}</a>
        @endforeach
    </nav>
</div>
