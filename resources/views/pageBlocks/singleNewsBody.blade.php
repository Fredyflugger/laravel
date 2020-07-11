<div class="blog-post">
    <h2 class="blog-post-title">{{ $newsData[$id]->title }}</h2>
    <p class="blog-post-meta">{{ $newsData[$id]->created_at }} by <a href="#">Jacob</a></p>
    <p>
    {{ $newsData[$id]->text }}
    </p>
</div><!-- /.blog-post -->