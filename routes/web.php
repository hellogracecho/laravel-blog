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
    $posts = Post::all();

    return view('posts', ['posts' => $posts ]);
});

// ** Laravel: Route Model Binding does the same job as below.. Wildcard{} should match the variable
Route::get('posts/{post:slug}', function (Post $post) {
    // Post::where('slug',$post)->firstOrFail()
    return view('post', ['post' => $post ]);
});

// ** Wildcard {} === function( wildcard ) // {post} === $id
// Route::get('posts/{post}', function ($id) {
//     // Find a post by its id and pass it to a view called "post"
//     return view('post', ['post' => Post::findOrFail($id) ]);
// });

// ->where() is to have the route control with RegEx.. 
// e.g.
// ->whereAlpha('post')
// ->whereNumeric('post')
// ->whereAlphaNumeric('post')
