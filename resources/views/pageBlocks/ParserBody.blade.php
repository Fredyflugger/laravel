<div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-center">
            <a href="{{ route('parser.save') }}">
                <h5 class="mb-1">Save Parsed news to DB</h5>
            </a>
        </div>
    </div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
</div>

<div class="col-md-8 blog-main">
    <div class="blog-post">
        <div class="col-md-8 blog-main">
            @foreach ($news as $value)
            <div class="blog-post">
                <a href="{{ $value['link'] }}">
                    <h2 class="blog-post-title">{{ $value['title'] }}</h2>
                </a>
                <p class="blog-post-meta">{{ $value['pubDate'] }}</p>
                <p>
                    {{ $value['description'] }}
                </p>
            </div><!-- /.blog-post -->
            @endforeach
        </div>

    </div><!-- /.blog-post -->
</div><!-- /.blog-main -->