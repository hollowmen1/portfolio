<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Profile") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form action="{{ route('profiles.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Description Textarea -->
                        <div class="mb-4">
                            <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
                            <textarea id="description" name="description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('description') border-red-500 @enderror">{{ old('description', $profile->description) }}</textarea>
                            @error('description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Image Input -->
                        <div class="mb-4">
                            <label for="image" class="block text-gray-600 text-sm font-medium mb-2">Image</label>
                            <input type="file" id="image" name="image" class="w-full py-2 @error('image') border-red-500 @enderror">
                            @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Update Profile</button>
                        </div>
                    </form>
                
                
  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
