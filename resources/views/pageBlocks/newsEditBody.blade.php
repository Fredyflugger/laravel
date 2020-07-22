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
    <label for="text">Text:</label><br>
    <input type="text" name="text" value="{{ $newsData->text }}" class="form-control input-lg"><br><br>
    @if ($errors->has('text'))
                <div class="alert alert-danger">
                    @foreach($errors->get('text') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div> <br>
    @endif 
    <input type="submit" value="Submit" class="form-control btn-success"><br><br>
</form>
</div>