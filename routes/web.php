<?php

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

Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@confirmLogin')->name('confirmLogin');
Route::get('category/{category_id}','CatPostController@show')->name('category');

/*Route::resource('category','CategoryCotroller');*/
/*Route::get('/', function () {
    return view('website.index')->name('website');
});*/


Route::get('/blog','HomePostController@index')->name('blog');
Route::get('/single/{id}','HomePostController@show')->name('single');

Route::get('post/{category_id}','CatPostController@index')->name('cat.post');
Route::get('/','WebHomeController@index')->name('home');

Route::get('/contact','ContactController@index')->name('contact');
Route::post('/contact_us','ContactController@saveContact')->name('contact_us');




Route::group(['middleware' => 'auth','prefix'=> 'admin'], function() {



Route::resource('posts','PostsController');
Route::get('logout','LoginController@logout')->name('logout');

Route::resource('users','UsersController');
Route::get('profile','ProfileController@index')->name('profile');
Route::resource('category','CategoryController');

Route::post('comment/{post}','CommentController@store')->name('comment.store');

Route::resource('leave','LeaveController');
Route::post('leaves/{id}','LeavesController@store')->name('l_store');
Route::resource('attendance','AttendanceController');
/**/
// Like Or Dislike
Route::post('save-likedislike','HomePostController@save_likedislike');

Route::get('message','AdminContactController@index')->name('message');
Route::get('mainlayout','mainlayout@index')->name('main');
Route::delete('/contactdestroy/{id}','AdminContactController@destroy')->name('contactdestroy');

});

