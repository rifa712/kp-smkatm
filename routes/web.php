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
Auth::routes();

Route::get('/','BlogController@index');
Route::get('/content-field/{slug}','BlogController@isi_blog')->name('blog.isi');

Route::get('/list-post','BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/cari','BlogController@cari')->name('blog.cari');
Route::get('/profil/Visi-dan-Misi','PagesController@visimisi')->name('visimisi');
Route::get('/profil/Hymne','PagesController@hymne')->name('hymne');
Route::get('/profil/Nama-dan-Lambang/','PagesController@namalambang')->name('namalambang');
Route::get('/profil/Struktur-Organisasi/','PagesController@strukturorganisasi')->name('strukturorganisasi');


Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/post/tampil_hapus','PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
    Route::resource('/category','CategoryController');
    Route::resource('/tag','TagController');
    Route::resource('/post','PostController');
    Route::delete('/post/kill/{id}','PostController@kill')->name('post.kill');
    Route::resource('user','UserController');
});
