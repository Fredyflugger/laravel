<div class="col-md-8 blog-main">
@foreach ($category->news as $news)
<div class="blog-post">
    <a href="{{ route('news') }}/{{ $news->id }}">
        <h2 class="blog-post-title">{{ $news->title }}</h2>
    </a>    
    <p class="blog-post-meta">{{ $news->created_at }} by <a href="#">Jacob</a></p>
    <p>
    {{ $news->text }}
    </p>
</div><!-- /.blog-post -->
@endforeach
</div>


