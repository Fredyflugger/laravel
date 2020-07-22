<div class="blog-post">
    <h2 class="blog-post-title">{{ $newsData->title }}</h2>
    <p class="blog-post-meta">{{ $newsData->created_at }}
    @if(Auth::check())
        @if(Auth::user()->is_admin)
            -- <a href="{{ route('news.edit', [$newsData]) }}" class="text-danger">Edit</a> -- <a href="{{ route('news.delete', [$newsData]) }}"  class="text-danger">Delete</a></p>
        @endif
    @endif
    <p class="blog-post-meta">
    @foreach($newsData->categories as $category)
    <a href="{{ route('singleCat', [$category->id]) }}"> {{ $category->categories }} </a>
    @endforeach
    <p>
    {{ $newsData->text }}
    </p>
</div><!-- /.blog-post -->