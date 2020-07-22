<div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
          <div class="col-md-8 blog-main">
              @foreach ($newsData as $value)
              <div class="blog-post">
                  <a href="{{ route('singleNews', [$value->id]) }}">
                      <h2 class="blog-post-title">{{ $value->title }}</h2>
                  </a>    
                  <p class="blog-post-meta">{{ $value->created_at }} by <a href="#">Jacob</a></p>
                  <p>
                  {{ $value->text }}
                  </p>
              </div><!-- /.blog-post -->
              @endforeach
              </div>

          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            {!! $newsData->links() !!}
          </nav>

        </div><!-- /.blog-main -->