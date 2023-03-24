<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Joseph Supriadi",
        "email" => "josephsupriadi86@gmail.com",
        "image" => "jojo.png"
    ]);
});
Route::get('/blog', [PostController::class, 'index']);

 

Route::get('blog/{slug}', function($slug) {
   
    return view('post', [
        "title" => "single post",
        "post" => Post::find($slug)
    ]);
});
