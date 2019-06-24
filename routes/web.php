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
    return view('index');
})->name('landing-page');

Route::get('/episodes', 'BlogController@index');
Route::get('/test', function(){
    return view('welcome');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/add-post', 'PostController@addPost')->name('add-post');
    Route::post('/initial/post', 'PostController@initialPost')->name('initial-post');
    Route::post('/add/photo', 'PostController@addPhoto')->name('add-photo');
    Route::post('/add/audio', 'PostController@addAudio')->name('add-audio');
    Route::post('/final/save', 'PostController@finalSave')->name('final-save');
    Route::get('/post/finish/{id}', 'PostController@finish');
    Route::get('/show/audio-page/{id}', 'PostController@audioPage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');