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
Route::get('/', 'PertanyaanController@index');

Route::get('/post/{id}', 'PertanyaanController@show');

Route::get('/profile', function () {
    return view('page.profile');
});
Route::get('/login-page', function () {
    return view('page.login');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::group(['middleware' => 'auth'], function () {

    Route::get('/pertanyaan/create', 'PertanyaanController@create');
    Route::post('/pertanyaan', 'PertanyaanController@store');
    Route::get('/jawaban', 'JawabanController@index');
    Route::get('/jawaban/create', 'JawabanController@create');
    Route::post('/jawaban', 'JawabanController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');