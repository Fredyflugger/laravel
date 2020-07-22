<div class="list-group col-md-8">

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-center">
                <a href="{{ route('categories.create') }}"><h5 class="mb-1">Create New Category</h5></a>
            </div>
        </div>
    </div>
    @foreach ($newsCategory as $category)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 category-title">{{ $category->categories }}</h5>
                <small>
                    @if(isset($category->updated_at))
                        {{$category->updated_at}}
                    @else
                        {{$category->created_at}} 
                    @endif
                </small>
            </div>
            <a href="{{ route('categories.edit', [$category]) }}"><p class="mb-1">Rename Category</p></a>
            <a href="{{ route('categories.delete', [$category]) }}"><small>Delete Category</small></a>
        </div>
    </div>
    @endforeach

</div>


