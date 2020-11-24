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

Route::group(['middleware' => 'auth'], function () {
  Route::get('/admin/postagem/novo', 'Admin\PostsController@create')->name('postagem.create');
Route::post('/admin/postagem/novo', 'Admin\PostsController@store')->name('postagem.store');
Route::get('/admin/postagem', 'Admin\PostsController@index')->name('admin.index');
Route::get('/admin/postagem/agendada', 'Admin\PostsController@agendada')->name('postagem.agendada');
Route::get('/admin/postagem/publicada', 'Admin\PostsController@publicada')->name('postagem.publicada');
Route::get('/admin/postagem/cronJob', 'Admin\PostsController@cronJob')->name('postagem.cronJob');


Route::get('/admin/categoria/novo', 'Admin\CategoryController@create')->name('categoria.create');
Route::get('/admin/categoria', 'Admin\CategoryController@index')->name('categoria.index');
Route::post('/admin/categoria/novo', 'Admin\CategoryController@store')->name('categoria.store');

Route::get('/admin/anuncios', 'Admin\AnunciosController@index')->name('anuncio.index');
Route::get('/admin/anuncios/novo', 'Admin\AnunciosController@create')->name('anuncio.novo');
Route::post('/admin/anuncios/novo', 'Admin\AnunciosController@store')->name('anuncio.novo.store');
Route::get('/admin/capas', 'Admin\CapasController@index')->name('capas.index');
Route::post('/admin/capas', 'Admin\CapasController@store')->name('capa.store');

Route::resource('admin/videos', 'Admin\MoviesController');

    Route::resource('admin/arquivos', 'Admin\FilesController');
    Route::post('admin/arquivos/upload', 'Admin\FilesController@upload')->name('file.upload');

    Route::resource('admin/secao', 'Admin\SectionsController');
});






Route::get('/', 'SiteController@index')->name('home.site');
Route::get('/noticia/{notica}', 'SiteController@show')->name('noticia.site');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
