<div class="list-group-item list-group-item-action flex-column align-items-start">

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
            <form action="{{ route('parsers.store') }}" method="POST">
                @csrf
                <label for="source_url"> RSS URL:</label><br>
                <input type="text" name="source_url" placeholder="https://www.rss.com/rss/breaking_news.rss" class="form-control"> <br>
                @if ($errors->has('source_url'))
                <div class="alert alert-danger">
                    @foreach($errors->get('source_url') as $error)
                    <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                <label for="name"> RSS Name:</label><br>
                <input type="text" name="name" placeholder="New RSS Name" class="form-control"> <br>
                @if ($errors->has('name'))
                <div class="alert alert-danger">
                    @foreach($errors->get('name') as $error)
                    <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                <input type="submit">
            </form>
        </div>
    </div>
</div>