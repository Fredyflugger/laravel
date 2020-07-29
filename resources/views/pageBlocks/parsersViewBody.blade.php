<div class="list-group col-md-8">

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-center">
                <a href="{{ route('parsers.create') }}">
                    <h5 class="mb-1">Add New URL</h5>
                </a>
            </div>
        </div>
    </div>
    @foreach ($parsers as $parser)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 category-title">{{ $parser->name }}</h5>
                <small>
                    {{ $parser->source_url }}
                </small>
            </div>
            <a href="{{ route('parsers.show', $parser->id) }}">
                <p class="mb-1">Edit</p>
            </a>
            <a href="{{ route('parsers.delete', $parser->id) }}"><small>Delete</small></a>
        </div>
    </div>
    @endforeach

</div>