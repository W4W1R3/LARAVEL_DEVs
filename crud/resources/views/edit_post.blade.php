<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - CRUD APP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Edit Post</h2>
        <form action="/edit_post/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $post->title }}" placeholder="Title" required>
            <textarea name="body" placeholder="Body Content..." required>{{ $post->body }}</textarea>
            <div class="form-actions">
                <button type="submit">Update Post</button>
                <a href="/" class="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>