<?php

use Illuminate\Http\Request;
use App\Task;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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

/*Route::get('/', function () { 
    return view('welcome');
    
});*/

Route::get('/', 'PostController@getIndex')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/author/post', 'HomeController@getPostForm')->name('post.form');
Route::post('/author/post', 'HomeController@createPost')->name('post.form');
Route::get('/author/post/detail/{id}', 'HomeController@getPost')->name('post.detail');
Route::get('/author/post/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/author/post/edit/{id}', 'HomeController@updatePost')->name('post.update');
Route::get('/author/post/delete/{id}', 'HomeController@deletePost')->name('post.delete');
Route::get('/post/read/{id}', 'PostController@getFullPost')->name('post.read');

