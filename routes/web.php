<?php
use App\Labour;
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



Route::get('/testmodel', function() {
$query = App\Post::all();
return $query;
});

//hari jum'at
Route::get('labours', function() {
    $query = Labour::take(3);
    return $query;
});

Route::get('labours/3data', function() {
	$query = Labour::select('nik','jabatan','kota')->first();
	return $query;
});

Route::get('labours/in-data/{nama?}/{nik?}/{jk?}/{tgl?}/{jabat?}/{kota?}/{gaji?}', function($nm=null,$nik=null,$jk=null,$tgl=null,$jbt=null,$kt=null,$gj=null) {
    $query = new Labour;
    $query->nama = $nm;
    $query->nik = $nik;
    $query->jenis_kelamin = $jk;
    $query->tgl_lahir = $tgl;
    $query->jabatan = $jbt;
    $query->kota = $kt;
    $query->gaji = $gj;

    $query->save();
    return $query;
});


//selasa minggu ke 2
Route::get('latihan', 'LatihanController@halo');
Route::get('tambah/{a?}/{b?}', 'LatihanController@pertambahan');
Route::get('kurang/{a?}/{b?}', 'LatihanController@pengurangan');
Route::get('bagi/{a?}/{b?}', 'LatihanController@pembagian');
Route::get('kali/{a?}/{b?}', 'LatihanController@perkalian');
Route::get('data1', 'LatihanController@loop');
Route::get('data2', 'LatihanController@loop2');
Route::get('tgs', 'LatihanController@tugaspulang');


//rabu minggu ke 2
Route::get('tabungan', 'TabunganController@index');
Route::get('tabungan/tambah/{a?}/{b?}/{c?}/{d?}', 'TabunganController@store');
Route::get('tabungan/edit/{f?}', 'TabunganController@edit');