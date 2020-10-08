<?php

use App\Mail\WelcomeNewUserMail;
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
//    return view('blog.index');
    return view('/blog/index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::put('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::delete('/profile/{user}', 'ProfilesController@destroy')->name('profile.destroy');

Route::resource('post', 'PostsController');

//comments
Route::put('/comment/{post}', 'CommentsController@store')->name('comment.store');
Route::patch('/comment/{comment}', 'CommentsController@update')->name('comment.update');
Route::get('/markAsRead', 'CommentsController@markNotificationAsRead');
Route::delete('/comment/{comment}', 'CommentsController@destroy');

//follow
Route::post('/flag/{type}/{target}', 'FlagController@setFlag');
Route::get('/api/follow/{user}', 'FlagController@getFollow');

//Route::view('/blog/index', 'blog/index');

Route::post('/follow/{user}', 'FollowingController@show');



