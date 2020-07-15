<div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
        <form action="{{ route('categories.editSubmit', [$newsCategory]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="categories"> Название категории:</label><br>
            <input type="text" name="categories" value="{{ $newsCategory->categories }}" class="form-control"> <br>
            @if ($errors->has('categories'))
                <div class="alert alert-danger">
                    @foreach($errors->get('categories') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <input type="submit">
        </form>
        <small>
        @if(isset($newsCategory->updated_at))
            {{$newsCategory->updated_at}}
        @else
            {{$newsCategory->created_at}} 
        @endif
        </small>
        </div>
    </div>
</div>