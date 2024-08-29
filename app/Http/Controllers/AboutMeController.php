<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutMeController extends Controller
{
    //
    public function index()
    {
        $skills = AboutMe::all();
        return view('about_me.index', compact('skills'));
    }

    public function create()
    {
        return view('about_me.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        AboutMe::create($validatedData);

        return redirect()->route('about_me.index')->with('success', 'Post created successfully');
    }


    public function edit($id)
    {
        $skill = AboutMe::findOrFail($id);
        return view('about_me.edit', ['skill' => $skill]);
    }

    public function update(Request $request, $id)
    {
        $skill = AboutMe::findOrFail($id);
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete($skill->image);

            // Store the new image
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        $skill->update($validatedData);

        return redirect()->route('about_me.index')->with('success', 'Post updated successfully');
    }


    public function destroy($id)
    {
        $skill = AboutMe::findOrFail($id);
        $skill->delete();

        return redirect()->route('about_me.index')->with('success', 'Post deleted successfully');
    }
}
