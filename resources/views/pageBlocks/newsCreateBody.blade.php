<div class="col-md-8 blog-main">
<form action="{{ route('news.create') }}" method="POST">

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
    <!-- <label for="shortDesc">Short Description:</label><br>
    <input type="text" name="shortDesc" placeholder="Short description of your news"><br><br> -->
    <input type="submit" value="Submit" class="form-control btn-success">
</form>
</div>