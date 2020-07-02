
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach ($newsCategory as $title)
        <a class="p-2 text-muted" href="{{ route('greetings') }}/{{ $title }}">{{ $title }}</a>
        @endforeach
    </nav>
</div>
