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
Auth::routes();

Route::get('/', function () {
    return view('page.home');
});

Route::get('/post', function () {
    return view('page.post');
});
Route::get('/login', function () { // menampilkan package editor
    return view('page.login');
});
Route::get('/profile', function () {
    return view('page.profile');
});

// Route::get('/coba', function () { // menampilkan package editor
//     return view('pertanyaan.form');
// });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/artikel/{id}', 'ArtikelController@show');
// Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
// Route::put('/artikel/{id}', 'ArtikelController@update');
// Route::delete('/artikel/{id}', 'ArtikelController@destroy');

Route::get('/coba', function () { // menampilkan package editor
    return view('text-editor');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
