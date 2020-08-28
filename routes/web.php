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
Route::get('/list-jurusan/{slug_jurusan}','BlogController@isi_jurusan')->name('jurusan.isi');


Route::get('/list-post','BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/list-tags/{tags}','BlogController@list_tags')->name('blog.tags');
Route::get('/cari','BlogController@cari')->name('blog.cari');

Route::get('/profil/Visi-dan-Misi','PagesController@visimisi')->name('visimisi');
Route::get('/profil/Hymne','PagesController@hymne')->name('hymne');
Route::get('/profil/Guru-dan-Staff','PagesController@gurustaff')->name('gurustaff');
Route::get('/profil/Nama-dan-Lambang/','PagesController@namalambang')->name('namalambang');
Route::get('/profil/Struktur-Organisasi/','PagesController@strukturorganisasi')->name('strukturorganisasi');

Route::get('/kontak','PagesController@contact')->name('contact');
Route::post('/kontak','PagesController@postContact');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::resource('/category','CategoryController');
    Route::resource('/tag','TagController');
    Route::resource('/pegawai','StaffController');
    Route::resource('/hymne','HymneController');
    Route::resource('/sambutan','SambutanController');
    Route::resource('/info','InfoSekolahController');
    

    Route::get('/post/tampil-hapus','PostController@terhapus')->name('post.tampil_hapus');
    Route::resource('/post','PostController');
    Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}','PostController@kill')->name('post.kill');

    Route::resource('user','UserController');
    Route::resource('/jurusan','JurusanController');
});
