<div class="col-md-8 blog-main">
<form action="{{ route('news.update', [$newsData->id]) }}" method="POST">

        @csrf
        @method('PUT')

    <label for="title">Headline:</label><br>
    <input type="text" name="title" value="{{ $newsData->title }}" class="form-control input-lg"><br>
    @if ($errors->has('title'))
                <div class="alert alert-danger">
                    @foreach($errors->get('title') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div> <br>
    @endif 
    <label for="description">Text:</label><br>
    <input type="text" name="description" value="{{ $newsData->description }}" class="form-control input-lg"><br><br>
    @if ($errors->has('description'))
                <div class="alert alert-danger">
                    @foreach($errors->get('description') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div> <br>
    @endif 
    <input type="submit" value="Submit" class="form-control btn-success"><br><br>
</form>
</div>