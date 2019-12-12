<?php

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
    return view('client.posts.all-posts');
});


Route::get('/single-post', function () {
    return view('client.posts.single-post');
});

Route::get('/admin/post/create', function () {
    return view('admin.pages.post.create');
})->name("post.create");


Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/category/create', function () {
    return view('admin.pages.category.create');
})->name("category.create");

Route::resource('admin/post', 'PostController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/comment', 'CommentController');
