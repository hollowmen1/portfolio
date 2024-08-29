<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Post") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="image" class="block text-gray-600">Image</label>
                            <input type="file" name="image" id="image" class="border border-gray-300 rounded-md p-2 w-full">
                        </div>
                        <div class="mb-4">
                            <label for="category" class="block text-gray-600">Category</label>
                            <select name="category_id" id="category" class="border border-gray-300 rounded-md p-2 w-full">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block text-gray-600">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="border border-gray-300 rounded-md p-2 w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="link" class="block text-gray-600">Link</label>
                            <input type="text" name="link" id="link" value="{{ old('link', $post->link) }}" class="border border-gray-300 rounded-md p-2 w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-600">Description</label>
                            <textarea name="description" id="description" class="border border-gray-300 rounded-md p-2 w-full" required>{{ old('description', $post->description) }}</textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Post</button>
                        </div>
                    </form>
                
  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
