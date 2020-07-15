
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted font-weight-bold" href="{{ route('categories.show') }}">All Categories</a>
        @foreach ($newsCategory as $title)
        <a class="p-2 text-muted" href="{{ route('categories.show') }}/{{ $title->id }}">{{ $title->categories }}</a>
        @endforeach
    </nav>
</div>
