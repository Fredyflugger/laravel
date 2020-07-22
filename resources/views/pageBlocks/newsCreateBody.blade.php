<div class="col-md-8 blog-main">
<form action="{{ route('news.store') }}" method="POST">

    @csrf

    <label for="title">Headline:</label><br>
    <input type="text" name="title" placeholder="Your News Headline" class="form-control"><br>
    @if ($errors->has('title'))
                <div class="alert alert-danger">
                    @foreach($errors->get('title') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
    @endif
    <label for="text">News:</label><br>
    <textarea name="text" cols="30" rows="10" class="form-control"></textarea><br>
    @if ($errors->has('text'))
                <div class="alert alert-danger">
                    @foreach($errors->get('text') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
    @endif
    <label for="categories[]">Choose categories:</label>
    <select class="form-control" multiple name="categories[]">
    @foreach($newsCategory as $category)
        <option value="{{ $category->id }}">{{ $category->categories }}</option>
    @endforeach
    </select><br>
    @if ($errors->has('categories[]'))
                <div class="alert alert-danger">
                    @foreach($errors->get('categories[]') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
    @endif
    <br>
    <input type="submit" value="Submit" class="form-control btn-success">
</form>
</div>
