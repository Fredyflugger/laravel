<div class="col-md-8 blog-main">
<form action="{{ route('singleNews', [$newsData]) }}/edit/submit" method="POST">
    
    @csrf
    @method('PUT')

    <label for="title">Login:</label><br>
    <input type="text" name="title" value="{{ $newsData->title }}" class="form-control input-lg"><br>
    <label for="text">Password:</label><br>
    <input type="text" name="text" value="{{ $newsData->text }}" class="form-control input-lg"><br><br>
    <input type="submit" value="Submit" class="form-control btn-success"><br><br>
</form>
</div>