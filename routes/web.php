<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
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


Route::get('/', [PostController::class, 'index'])->name('myhome');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

// ** Laravel: Route Model Binding does the same job as below.. Wildcard{} should match the variable
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

// * Route model binding with :slug
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category
        ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
        ]);
});