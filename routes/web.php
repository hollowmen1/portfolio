<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Mail\NotifyMail;
use App\Models\AboutMe;
use App\Models\Category;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $categories = Category::get();
    $posts = Post::get();
    $skills = AboutMe::get();
    $profile = Profile::first();
    $crash = session('crash');
    
    return view('welcome', ['categories' => $categories, 'posts' => $posts, 'profile' => $profile, 'skills' => $skills, 'crash' => $crash]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function() {
    Route::resource('category',CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('about_me', AboutMeController::class);
    Route::get('profile/edit/{id}', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::put('profile/update/{id}', [ProfileController::class, 'update'])->name('profiles.update');
});

Route::post('send-email', function (Request $request) {
    $data = $request->validate([
        'name'          => 'required',
        'email'         => 'required|email',
        'subject'       => 'nullable',
        'message'       => 'required'
    ]);
    Mail::to('adeelasghar.cw@gmail.com')->send(new NotifyMail($data));
    Session::flash('success', 'Thank you for your message. We will get back to you soon!');
    return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
})->name('send.email');

require __DIR__.'/auth.php';
