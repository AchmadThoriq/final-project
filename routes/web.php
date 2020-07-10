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
    return view('page.home');
});

Route::get('/post', function () {
    return view('page.post');
});

Route::get('/profile', function () {
    return view('page.profile');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/pertanyaan', 'PertanyaanController@index');
    Route::get('/pertanyaan/create', 'PertanyaanController@create');
    Route::post('/pertanyaan', 'PertanyaanController@store');
    Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');