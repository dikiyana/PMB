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


Route::get('/', 'IndexController@index');
Route::get('/form', 'FormController@biodata');
Route::post('/kirim', 'FormController@kirim');
Route::get('/data-table', function(){
    return view('table.datatable');
});


Route::middleware(['auth'])->group(function () {
//CRUD Kategori
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori', 'KategoriController@store');
Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/{kategori_id}', 'KategoriController@show');
Route::get('/kategori/{kategori_id}/edit', 'KategoriController@edit');
Route::put('/kategori/{kategori_id}', 'KategoriController@update');
Route::delete('/kategori/{kategori_id}', 'KategoriController@destroy');    

Route::resource('profile', 'ProfileController')->only([
    'index', 'update'
]);
Route::resource('komentar', 'KomentarController')->only([
    'store'
]);
});




//CRUD Berita
Route::resource('/berita', 'BeritaController');

//CRUD Detil
Route::get('/detil/create', 'DetilController@create');
Route::post('/detil', 'DetilController@store');
Route::get('/detil', 'DetilController@index');
Route::get('/detil/{detil_id}', 'DetilController@show');
Route::get('/detil/{detil_id}/edit', 'DetilController@edit');
Route::put('/detil/{detil_id}', 'DetilController@update');
Route::delete('/detil/{detil_id}', 'DetilController@destroy');
Auth::routes();

//CRUD Agama
Route::resource('/agama', 'AgamaController');

//CRUD Siswa
Route::resource('/siswa', 'SiswaController');

// Route::get('/home', 'HomeController@index')->name('home');
