<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @if(Auth::check())
        @if(Auth::user()->is_admin)
        <a class="p-2 font-weight-bold text-danger" href="{{ route('parsers.index') }}">Parsers Menu</a>
        @foreach ($parsers as $parser)
        <a class="p-2 text-danger" href="{{ route('parser', ['parser' => $parser->id]) }}">{{ $parser->name }}</a>
        @endforeach
        @endif
        @endif
    </nav>
</div>