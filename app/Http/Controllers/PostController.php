<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title' => 'required|string',
            'link' => 'required|string',
            'category_id' => 'required|string',
            'description' => 'required|string',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }


    public function edit(Post $post)
    {
        $categories = Category::get();
        return view('posts.edit', ['post'=> $post,'categories' => $categories]);
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
            'title' => 'required|string',
            'link' => 'required|string',
            'category_id' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete($post->image);

            // Store the new image
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
