<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'reset'    => false,
    'confirm'  => false,
    'verify'   => false,
]);

Route::middleware('auth')->group(function () {
    Route::get('/create', 'LinkController@create')->name('create');
    Route::any('/store', 'LinkController@store')->name('store');
    Route::any('/post/{post_id}/comment/store', 'CommentsController@store')->name('storeComment');
});
Route::get('/post/{id}', 'LinkController@show')->name('detail');
Route::get('', 'LinkController@show')->name('home');
