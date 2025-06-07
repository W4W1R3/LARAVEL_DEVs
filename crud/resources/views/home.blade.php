<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Auth::check() ? 'Dashboard' : 'Welcome' }} - CRUD APP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@auth
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">CRUD APP</div>
            <div class="user-info">
                <span class="welcome-text">Welcome back, <strong>{{ Auth::user()->name }}</strong>!</span>
                <form action="/logout" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-logout">Log Out</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Success Messages -->
    @if(session('success'))
        <div class="container">
            <div class="success-message">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Create Post Form -->
    <div class="post">
        <h2>✏️ Create a New Post</h2>
        <form action="/create_post" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" placeholder="Enter an engaging title..." required>
            </div>
            <div class="form-group">
                <label for="body">Post Content</label>
                <textarea id="body" name="body" placeholder="Share your thoughts..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">📝 Publish Post</button>
        </form>
    </div>

    <!-- Posts Section -->
    <div class="posts-section">
        <h2 class="section-title">📚 My Posts</h2>
        
        @if($posts->count() > 0)
            @foreach($posts as $post)
                <div class="post-card">
                    <div class="post-header">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <span class="post-author">by {{ $post->user->name }}</span>
                    </div>
                    <div class="post-body">
                        {{ $post->body }}
                    </div>
                    <div class="post-actions">
                        <a href="/edit_post/{{ $post->id }}" class="btn btn-secondary">✏️ Edit</a>
                        <form action="/delete_post/{{ $post->id }}" method="POST" style="display: inline;" 
                              onsubmit="return confirm('Are you sure you want to delete this post?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">🗑️ Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <div class="empty-state">
                <p>📝 You haven't created any posts yet.</p>
                <p>Start sharing your thoughts by creating your first post above!</p>
            </div>
        @endif
    </div>

@else
    <!-- Welcome Header -->
    <div class="container">
        <h1>🚀 Welcome to CRUD APP</h1>
        <p style="text-align: center; color: #666; font-size: 18px; margin-bottom: 0;">
            Join our community and start sharing your thoughts with the world!
        </p>
    </div>

    <!-- Authentication Section -->
    <div class="auth-section">
        <!-- Register Form -->
        <div class="container auth-container">
            <h2>🎯 Create Account</h2>
            @if($errors->any())
                <div class="error-message">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" placeholder="Enter your name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" name="email" type="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Create a strong password" required>
                </div>
                <button type="submit" class="btn btn-primary">🎉 Join Now</button>
            </form>
        </div>

        <!-- Login Form -->
        <div class="container auth-container">
            <h2>🔑 Sign In</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="loginname">Name</label>
                    <input id="loginname" name="loginname" type="text" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="loginpassword">Password</label>
                    <input id="loginpassword" name="loginpassword" type="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary">🚀 Sign In</button>
            </form>
        </div>
    </div>

    <div class="auth-divider">
        <span>Already have an account? Sign in above!</span>
    </div>
@endauth

</body>
</html>