<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    $posts = Post::allPosts();

    return view('posts', ['posts' => $posts ]);
});

// ** Wildcard {} === function( wildcard ) // {post} === $slug
Route::get('posts/{post}', function ($slug) {
    // Find a post by its slug and pass it to a view called "post"
    return view('post', ['post' => Post::findOrFail($slug) ]);
});

// ->where() is to have the route control with RegEx.. 
// e.g.
// ->whereAlpha('post')
// ->whereNumeric('post')
// ->whereAlphaNumeric('post')
