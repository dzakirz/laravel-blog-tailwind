<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Dzaki Rozaan",
        "email" => "dzakirz@gmail.com",
        "gambar" => "dzaki.png",
    ]);
});


Route::get('posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::latest()->get()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
Route::get('authors/{user}', function(User $user){
    return view('author',[
        'title' => $user->name,
        'posts' => $user->posts
    ]);
});
