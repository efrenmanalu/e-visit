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

Route::get('/Login', function () {
    return view('/login');
})->middleware('guest');
Route::post('/kirimdata', 'login@masuk');
Route::get('/Keluar', 'login@keluar');

//Admin
Route::get('/Admin', 'TambahakunController@getTambahakun')->middleware('auth:admin')->name('Tambahakun');
Route::POST('/Admin', 'TambahakunController@PostTambahakun')->name('Tambahakun');
 
Route::get('/Admin/Kelolaakun', function () {
    return view('/Admin/Kelolaakun');
});
Route::get('/Admin/Riwayatkunjungan', function () {
    return view('/Admin/Riwayatkunjungan');
});
Route::get('/Admin/Kelolaakun/edit', function () {
    return view('/Admin/Kelolaprofil');
});
Route::get('/DaftarRequest', function () {
    return view('/Operator/Daftarrequestjhadsg');
});

//Operator
Route::get('/Operator', 'KunjunganController@create')->middleware('auth:operator');
//Route::POST('Operator.fetch', 'KunjunganController@fetch')->name('KunjunganController.fetch');
Route::POST('/Operator', 'KunjunganController@create')->middleware('auth:operator')->name('kunjungan');
//Route::POST('Operator.store', 'KunjunganController@store')->name('KunjunganController.store');


Route::get('/Operator/Daftarrequest', function () {
    return view('/Operator/Daftarrequest');
});
Route::get('/Operator/Daftarriwayat', function () {
    return view('/Operator/Daftarriwayat');
});
Route::get('/Operator/Profil', function () {
    return view('/Operator/Profiloperator');
});
Route::get("/Operator/Daftarrequest/Detailrequest", function () {
    return view('/Operator/Detailrequest');
});


//Pejabat/Staff
Route::get('/Pegawai', function () {
    return view('/Pegawai/Index');
})->middleware('auth:pegawai');
Route::get('/Pegawai/Tamuanda', function () {
    return view('/Pegawai/Tamuanda');
});
Route::get('/Pegawai/Profil', function () {
    return view('/Pegawai/Profilpegawai');
});

Route::get('/Keluar', function () {
    return view('/login');
});





