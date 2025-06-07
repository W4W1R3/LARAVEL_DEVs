<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function showEditScreen(Post $post)
    {
        // Check if the authenticated user owns this post
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action. You can only edit your own posts.');
        }

        return view('edit_post', ['post' => $post]);
    }

    public function create_post(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);         
        $incomingFields['user_id'] = Auth::id();
        
        Post::create($incomingFields);
        
        return redirect('/')->with('success', 'Post created successfully!');
    }

    public function updatePost(Post $post, Request $request)
    {
        // Check if the authenticated user owns this post
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action. You can only update your own posts.');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        
        $post->update($incomingFields);
        
        return redirect('/')->with('success', 'Post updated successfully!');
    }

    public function deletePost(Post $post)
    {
        // Check if the authenticated user owns this post
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action. You can only delete your own posts.');
        }

        $post->delete();
        
        return redirect('/')->with('success', 'Post deleted successfully!');
    }
}