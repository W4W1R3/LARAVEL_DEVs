<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - CRUD APP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">CRUD APP</div>
            <div class="user-info">
                <span class="welcome-text">Editing as <strong>{{ Auth::user()->name }}</strong></span>
                <a href="/" class="btn btn-secondary">🏠 Back to Home</a>
            </div>
        </div>
    </nav>

    <!-- Edit Post Form -->
    <div class="container">
        <h1>✏️ Edit Your Post</h1>
        
        @if($errors->any())
            <div class="error-message">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/edit_post/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" 
                       placeholder="Enter an engaging title..." required>
            </div>
            
            <div class="form-group">
                <label for="body">Post Content</label>
                <textarea id="body" name="body" placeholder="Share your thoughts..." required>{{ old('body', $post->body) }}</textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">💾 Update Post</button>
                <a href="/" class="btn btn-secondary">❌ Cancel</a>
            </div>
        </form>

        <!-- Post Preview -->
        <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid #e1e5e9;">
            <h3 style="color: #667eea; margin-bottom: 15px;">📋 Current Post Preview</h3>
            <div class="post-card" style="margin: 0;">
                <div class="post-header">
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <span class="post-author">by {{ $post->user->name }}</span>
                </div>
                <div class="post-body">
                    {{ $post->body }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>