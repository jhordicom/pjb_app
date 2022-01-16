<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Export\UserExport;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/dashboard', 'BerandaController@dashboard')->name('dashboard');
Route::get('/struktur', 'BerandaController@struktur')->name('struktur');
Route::get('/beranda', 'BerandaController@index');
//semua data
Route::get('/data-sertifikasi', 'SertifikasiController@index')->name('data-sertifikasi');
Route::get('/data-pegawai', 'PegawaiController@index')->name('data-pegawai');
Route::get('/data-workshop', 'WorkshopController@index')->name('data-workshop');
Route::get('/data-pelatihan', 'PelatihanController@index')->name('data-pelatihan');
Route::get('/data-jabatan', 'JabatanController@index')->name('data-jabatan');
Route::get('/data-bidang', 'BidangController@index')->name('data-bidang');
//semua search
Route::get('/search', 'PegawaiController@index')->name('search');
Route::get('/search-sertifikasi', 'SertifikasiController@index')->name('search-sertifikasi');
Route::get('/searchi', 'PelatihanController@index')->name('searchi');
Route::get('/search', 'JabatanController@index')->name('search');
Route::get('/search', 'BidangController@index')->name('search');

Route::get('/create-pegawai', 'PegawaiController@create')->name('create-pegawai');


Route::group(['middleware' => ['auth', 'ceklevel:super user']], function () {

    //data sertifikasi
    Route::get('/create-sertifikasi', 'SertifikasiController@create')->name('create-sertifikasi');
    Route::post('/simpan-sertifikasi', 'SertifikasiController@store')->name('simpan-sertifikasi');
    Route::get('/edit-sertifikasi/{id}', 'SertifikasiController@edit')->name('edit-sertifikasi');
    Route::post('/update-sertifikasi/{id}', 'SertifikasiController@update')->name('update-sertifikasi');
    Route::get('/delete-sertifikasi/{id}', 'SertifikasiController@destroy')->name('delete-sertifikasi');
    //impor export sertifikasi
    Route::get('/export-sertifikasi', 'SertifikasiController@export')->name('export-sertifikasi');
    Route::post('/import-sertifikasi', 'SertifikasiController@Sertifikasiimportexcel')->name('import-sertifikasi');
    //data pegawai


    Route::post('/simpan-pegawai', 'PegawaiController@store')->name('simpan-pegawai');
    Route::get('/edit-pegawai/{id}', 'PegawaiController@edit')->name('edit-pegawai');
    Route::post('/update-pegawai/{id}', 'PegawaiController@update')->name('update-pegawai');
    Route::get('/delete-pegawai/{id}', 'PegawaiController@destroy')->name('delete-pegawai');
    Route::get('/datatables', 'CobaController@index')->name('datatables');
    //impor export user
    Route::get('/export-user', 'PegawaiController@export')->name('export-user');
    Route::post('/import-user', 'PegawaiController@userimportexcel')->name('import-user');
    // workshop
    Route::get('/create-workshop', 'WorkshopController@create')->name('create-workshop');
    Route::post('/simpan-workshop', 'WorkshopController@store')->name('simpan-workshop');
    Route::get('/edit-workshop/{id_work}', 'WorkshopController@edit')->name('edit-workshop');
    Route::post('/update-workshop/{id_work}', 'WorkshopController@update')->name('update-workshop');
    Route::get('/delete-workshop/{id_work}', 'WorkshopController@destroy')->name('delete-workshop');
    //impor export workshop
    Route::get('/export-workshop', 'WorkshopController@export')->name('export-workshop');
    Route::post('/import-workshop', 'WorkshopController@workshopimportexcel')->name('import-workshop');

    //pelatihan
    Route::get('/create-pelatihan', 'PelatihanController@create')->name('create-pelatihan');
    Route::post('/simpan-pelatihan', 'PelatihanController@store')->name('simpan-pelatihan');
    Route::get('/edit-pelatihan/{id_pelatihan}', 'PelatihanController@edit')->name('edit-pelatihan');
    Route::post('/update-pelatihan/{id_pelatihan}', 'PelatihanController@update')->name('update-pelatihan');
    Route::get('/delete-pelatihan/{id_pelatihan}', 'PelatihanController@destroy')->name('delete-pelatihan');
    //impor export pelatihan
    Route::get('/export-pelatihan', 'PelatihanController@export')->name('export-pelatihan');
    Route::post('/import-pelatihan', 'PelatihanController@pelatihanimportexcel')->name('import-pelatihan');
    //jabatan
    Route::get('/create-jabatan', 'JabatanController@create')->name('create-jabatan');
    Route::post('/simpan-jabatan', 'JabatanController@store')->name('simpan-jabatan');
    Route::get('/edit-jabatan/{id_jabatan}', 'JabatanController@edit')->name('edit-jabatan');
    Route::post('/update-jabatan/{id_jabatan}', 'JabatanController@update')->name('update-jabatan');
    Route::get('/delete-jabatan/{id_jabatan}', 'JabatanController@destroy')->name('delete-jabatan');
    //impor export jabatan
    Route::get('/export-jabatan', 'JabatanController@export')->name('export-jabatan');
    Route::post('/import-jabatan', 'JabatanController@jabatanimportexcel')->name('import-jabatan');
    Route::get('/export-user', [
        'uses' => 'PegawaiController@export',
        'as' => 'export-user'
    ]);

    //  coba
    Route::get('/coba-template', 'DivisiController@show')->name('coba-template');

    //bidang
    Route::get('/create-bidang', 'BidangController@create')->name('create-bidang');
    Route::post('/simpan-bidang', 'BidangController@store')->name('simpan-bidang');
    Route::get('/edit-bidang/{id_bidang}', 'BidangController@edit')->name('edit-bidang');
    Route::post('/update-bidang/{id_bidang}', 'BidangController@update')->name('update-bidang');
    Route::get('/delete-bidang/{id_bidang}', 'BidangController@destroy')->name('delete-bidang');
});
