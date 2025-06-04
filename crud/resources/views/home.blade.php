<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container, .post {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border: 2px solid #28a745;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #28a745;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .auth-message {
            text-align: center;
            margin-top: 40px;
        }
    </style>
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
