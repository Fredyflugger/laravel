<html>
    <head>
        <title>{{ $title }}</title>
    </head>
    <body>
        <div class="menu">
            <a href="{{ route('greetings') }}">Home</a>
            <a href="{{ route('news') }}">News</a>
            <a href="{{ route('news.create') }}">Create News</a>
            <a href="{{ route('auth') }}">Login</a>
        </div>
    </body>
</html>

