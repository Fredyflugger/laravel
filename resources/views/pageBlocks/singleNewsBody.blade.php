<div class="blog-post">
    <h2 class="blog-post-title">{{ $newsData->title }}</h2>
    <p class="blog-post-meta">{{ $newsData->created_at }} -- <a href="{{ route('singleNews', [$newsData]) }}/edit">Edit</a> -- <a href="{{ route('singleNews', [$newsData]) }}/delete">Delete</a></p>
    <p>
    {{ $newsData->text }}
    </p>
</div><!-- /.blog-post -->