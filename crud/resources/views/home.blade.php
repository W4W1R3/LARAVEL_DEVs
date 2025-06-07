<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@auth
    <div class="container auth-message">
        <p>Congrats! You are logged in.</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
    </div>

    <div class="post">
        <h2>Create a New Post</h2>
        <form action="/create_post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="body" placeholder="Body Content..." required></textarea>
            <button type="submit">Save Post</button>
        </form>
    </div>

    <div class="border-box">
        <h2>All Posts</h2>
        @foreach($posts as $post)
            <div class="border-box">
                <h3>{{ $post['title'] }} by {{ $post->user->name}}</h3> 
                {{ $post['body'] }}
                <p><a href="/edit_post/{{ $post->id}}">Edit</a></p>
                <form action="/delete_post/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>

@else
    <div class="container">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Name" required>
            <input name="email" type="email" placeholder="Email" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>

    <div class="container">
        <h2>Log In</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="Name" required>
            <input name="loginpassword" type="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
    </div>
@endauth

</body>
</html>
