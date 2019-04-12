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
Route::get('welcome', function () {
	echo "welcome";
});

route::get('/show/{id}', function ($id) {
	echo "Nilai Parameter Adalah".$id;
});

route::get('/show/{id?}', function ($id=1) {
	echo "Nilai Parameter Adalah".$id;
});

route::get('/edit/{nama}', function ($nama) {
	echo "Nilai Parameter Adalah".$nama;
})->where('nama','[A-Za-z]+');

route::get('/index', function (){
	echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

route::get('/create', function() {
	echo "route diakses menggunakan nama";
})->name('create');

route::get('/barangs', 'barangsController@index');

route::get('/pelanggan', 'pelangganController@index');

route::resource('produk','produkController');