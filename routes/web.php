<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use \App\models\kir_model;

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

// menu login

Route::get('/', function () {
    // return view('welcome');
    return view('login');
    // return view('layanandepan');
    // return view('depan2');
});

// Bus masyarakat
Route::get('/bussimpandepan',
'busController@bussimpandepan');;

Route::post('bus/create', 'busController@createdepan');








Route::get('/login', 'AuthController@login')->name('login');
// mengambil data login
Route::post('/postlogin', 'AuthController@postlogin');
// keluar dari aplikasi
Route::get('/logout', 'AuthController@logout');


// melindungi tampilan dari user yg belum login
Route::group(['middleware' => ['auth', 'CheckRole:admin,user']], function () {

    // menampilkan dashboard
    Route::get('/depan', function () {
        return view('/depan');
    });


    // TAMU
    // menu tamu
    Route::get('/tamu', 'TamuController@index');

    Route::get('/tambahtamu', function () {
        return view('tambahtamu');
    });


    Route::get('/cetak', 'TamuController@cetak');

    // Route::get('/tamu/{id}/cetak', 'TamuController@cetak');
    // ambil data berdasarkan id untuk ditampilkan terlebih dahulu
    Route::get('/tamu/{id}/tampilpdf', 'TamuController@cetak');

    //ambil data yang dientrykan
    route::post('/tamu/simpan', 'TamuController@simpan');


    // SURAT
    Route::get('/surattampil', 'SuratController@index');
    route::get('/surat', 'SuratController@tambah');
    //route simpan data surat masuk
    Route::post('/surat/create', 'suratController@create');


    // BUS
    route::get('/bus', 'BusController@index');
    //ke form pengisian data
    Route::get('/bussimpan', function () {
        return view('/bussimpan');
    });

    //menampilkan data pemohon bus ke pdf
    //untuk selanjutnya dicetak
    Route::get('/bus/{id}/tampilbus', 'busController@cetak');

    //menyimpan data entryan bus
    Route::post('bus/create', 'busController@create');

    // JARAK

    Route::get('/jarak', 'JarakController@index');
    // membuat route untuk form simpan data
    Route::get('/jaraksimpan', function () {
        return view('/jaraksimpan');
    });
    // menyimpan hasil entry
    Route::post('/jarak/simpan', 'jarakcontroller@simpan');

    // menampilkan data pemohon ke pdf
    Route::get('/jarak/{id}/tampiljarak', 'jarakController@cetak');

    //    KIR
    // menyimpan hasil entry rekom kir
    Route::post('/kir/simpan', 'KirController@simpan');
    // ke tampilan kir
    Route::get('/kir', 'KirController@index');

    // Route::get('/kir', 'KirController@index');

    // ke form tambah pemohon kir
    Route::get('/kirsimpan', function () {

        // membuat penomoran otomatis
        $awal1 = '551';
        $awal2 = "DISHUB_";
        $awal3 = "KES-LALIN";
        $no = 1;
        $bulan_romawi = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        $noakhir = kir_model::max('no');
        // substr($noakhir,-4)->mengambil karakter dari kanan
        if (substr($noakhir, -4) == date('Y')) {
            // nomor urut diambil dari no akhir
            //untuk mengambil bulan di array pada date menggunakan "n"->date('n)
            $kode = $awal1 . '/' . sprintf("%03s", abs(substr($noakhir, 5, 3)) + 1) . '/' . $bulan_romawi[date('n')] . '/' . $awal2  . $awal3 . '/' . date('Y');
            // echo $kode;
        } else {
            $kode = $awal1 . '/' . sprintf("%03s", $no) . '/' . $bulan_romawi[date('n')] . '/' . $awal2  . $awal3 . '/' . date('Y');
            // echo $kode;
        }

        return view('/kirsimpan', ['kode' => $kode]);
    });

    // menampilkan data pemohon ke pdf
    Route::get('/kir/{id}/tampilkir', 'kirController@cetak');
});

// TAMPIL KIR TRUK
Route::get('/kirtruk', 'trukController@index');

// ke form tambah pemohon kir
Route::get('/truksimpan', function () {

    // membuat penomoran otomatis
    $awal1 = '551';
    $awal2 = "PKB";
    $awal3 = "KES-LALIN";
    $no = 1;
    $bulan_romawi = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
    $noakhir = kir_model::max('no');
    // substr($noakhir,-4)->mengambil karakter dari kanan
    if (substr($noakhir, -4) == date('Y')) {
        // nomor urut diambil dari no akhir
        //untuk mengambil bulan di array pada date menggunakan "n"->date('n)
        $kode = $awal1 . '/' . sprintf("%03s", abs(substr($noakhir, 5, 3)) + 1) . '/' . $bulan_romawi[date('n')] . '/' . $awal2  . '/' . date('Y');
        // echo $kode;
    } else {
        $kode = $awal1 . '/' . sprintf("%03s", $no) . '/' . $bulan_romawi[date('n')] . '/' . $awal2  . '/' . date('Y');
        // echo $kode;
    }

    return view('/truksimpan', ['kode' => $kode]);
});


// penutupan jalan
Route::get('/pengguna', 'penggunacontroller@index');
Route::get('/penggunatambah', function () {
    return view('penggunatambah');
});
Route::post('/pengguna/simpan', 'penggunacontroller@simpan');

Route::get('/pengguna/{id}/tampilpdfjalan', 'penggunacontroller@tampil');

// agenda pejabat
Route::get('/agenda', 'agenda_controller@index');

Route::get('/agendatambah', 'agenda_controller@tambah');

Route::post('/agenda/simpan', 'agenda_controller@simpan');

/**
 * PEGAWAI
 */
route::get('/pegawai','pegawaicontroller@index');



// melindungi tampilan dari user yg belum login dan khusus untuk admin saja
Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {

    // routing untuk user khusus admin
    Route::get('/user', 'UserController@index');
    // menambah data user
    Route::get('/usertambah', function () {
        return view('/usertambah');
    });
    // menyimpan data user baru khusus admin
    Route::post('/user/simpan', 'UserController@simpan');

    // menghapus data user khusus admin
    Route::get('/user/{id}/hapus', 'UserController@hapus');
});
