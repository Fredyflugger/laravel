<?php
$catID = $_GET['catid'];
?>

<div class="col-md-8 blog-main">
@foreach ($newsData as $value)
@if ($catID == $value->categories)
<div class="blog-post">
    <a href="{{ route('news') }}/{{ $value->id }}">
        <h2 class="blog-post-title">{{ $value->title }}</h2>
    </a>    
    <p class="blog-post-meta">{{ $value->created_at }} by <a href="#">Jacob</a></p>
    <p>
    {{ $value->text }}
    </p>
</div><!-- /.blog-post -->
@endif
@endforeach
</div>


