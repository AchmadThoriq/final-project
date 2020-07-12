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
Route::get('/', 'PertanyaanController@outindex');
// Route::get('/', function () {
//     return view('page.home');
// });
Route::get('/post/{id}', 'PertanyaanController@show');

Route::get('/login-page', function () {
    return view('page.login');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/pertanyaan/create', 'PertanyaanController@create');
    Route::post('/pertanyaan', 'PertanyaanController@store');
    Route::get('/jawaban', 'JawabanController@index');
    Route::get('/jawaban/create', 'JawabanController@create');
    Route::post('/jawaban', 'JawabanController@store');
    Route::post('/comment/answer/create', 'CommentController@store_answer_comment');
    Route::post('/jawaban', 'JawabanController@store');
});
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');