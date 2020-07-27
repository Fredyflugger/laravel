<div class="col-md-8 blog-main">
  <div class="blog-post">
  <div class="col-md-8 blog-main">
      @foreach ($newsData as $value)
      <div class="blog-post">
          <a href="{{ route('singleNews', [$value->id]) }}">
              <h2 class="blog-post-title">{{ $value->title }}</h2>
          </a>    
          <p class="blog-post-meta">{{ $value->created_at }} by <a href="#">Jacob</a></p>
          <p>
          {{ $value->description }}
          </p>
      </div><!-- /.blog-post -->
      @endforeach
      </div>

  </div><!-- /.blog-post -->

  <nav class="blog-pagination">
    {!! $newsData->links() !!}
  </nav>

</div><!-- /.blog-main -->