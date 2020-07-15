<div class="list-group-item list-group-item-action flex-column align-items-start">
    
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
        <form action="{{ route('categories.addSubmit') }}" method="POST">
            @csrf
            @method('PUT')
            <label for="categories"> Название категории:</label><br>
            <input type="text" name="categories" placeholder="New Category Name" class="form-control"> <br>
            @if ($errors->has('categories'))
                <div class="alert alert-danger">
                    @foreach($errors->get('categories') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <input type="submit">
        </form>
        </div>
    </div>
</div>