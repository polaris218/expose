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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload', 'FileUploadController@upload')->name('upload');
Route::get('/usermanage', 'UserManageController@index')->name('usermanage');
Route::put('/userupdate', 'UserManageController@update')->name('userupdate');
Route::delete('/userdelete', 'UserManageController@delete')->name('userdelete');