<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebPostController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Ensure authenticated user creates the blog
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog post created!');
    }
    public function edit(Blog $blog)
    {
        // Ensure only the owner can edit the blog
        if (auth()->id() !== $blog->user_id) {
            return redirect()->route('blogs.index')->with('error', 'Unauthorized access!');
        }

        return view('blogs.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        // Find the blog post by ID
        $blog = Blog::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Update the blog post with the new data
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();

        // Redirect the user back to the blogs index or show page
        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully!');
    }

    public function destroy($id)
    {
        // Find the blog post by ID
        $blog = Blog::findOrFail($id);

        // Delete the blog post
        $blog->delete();

        // Redirect back to the blogs index page with a success message
        return redirect()->route('blogs.index')->with('success', 'Blog post deleted successfully!');
    }
}
