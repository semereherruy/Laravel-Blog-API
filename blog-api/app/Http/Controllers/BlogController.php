<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    // Get all blogs
    public function index()
    {
        return Blog::all();
    }

    // Get a single blog by id
    public function show($id)
    {
        return Blog::findOrFail($id);
    }

    // Create a new blog
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create the blog post
        $blog = Blog::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'user_id' => auth()->id(),
        ]);

        // Return the response
        return response()->json([
            'message' => 'Blog created successfully!',
            'blog' => $blog
        ], 201);
    }

    // Update a blog
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        // Check if the logged-in user is the owner
        if (Auth::id() !== $blog->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog->update($request->only('title', 'content'));

        return response()->json([
            'message' => 'Blog updated successfully!',
            'blog' => $blog
        ]);
    }

    // Delete a blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Check if the logged-in user is the owner
        if (Auth::id() !== $blog->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
