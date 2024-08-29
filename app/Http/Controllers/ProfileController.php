<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jobs' => 'nullable|array',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $data['image'] = $imagePath;
        }

        Profile::create($data);

        return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
    }

    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $data = $request->validate([
            'jobs' => 'nullable|array',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $data['image'] = $imagePath;
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profile deleted successfully.');
    }
}
