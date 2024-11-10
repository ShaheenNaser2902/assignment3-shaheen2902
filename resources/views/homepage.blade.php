<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limu Social Center</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Limu Social Center</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Create Post</h2>
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="Title" required>
                    <textarea name="content" placeholder="Content" required></textarea>
                    <button type="submit">Post</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Posts Feed</h2>
                @foreach($posts as $post)
                    <div>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                        <small>Posted by {{ $post->user->name }} on {{ $post->created_at }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>