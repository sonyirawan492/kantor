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

Route::get('/', function () {
    // return view('ptms');
    return redirect('kantor');
})->middleware('auth');
Route::get('/info', function () {
    return view('info', ['jabatan'=>'HRD']);
});

use App\Http\Controllers\infoController;
use App\Http\Controllers\KendaraanController;

Route::get('/info/{kd}', [infoController::class, 'infoPgw']);
/*
Route::get('/pegawai', function () {
    return view('pegawai.add',[
        'is_update' => 0,
        'optjabatan' => [
            '' =>'-Pilih salah satu -',
            'hrd' => 'HRD',
            'staff operaional' => 'Staff Operasional',
            'admin' => 'Admin',
            'manager operasional' => 'Manager Operasional',
            'kurir' => 'Kurir'
        ]
Route::get('/kendaraan', function () {
    return view('kendaran.add2',[
        'is_update' => 0,
        'optmerk' => [
            '' =>'-Pilih salah satu -',
            'honda' => 'Honda',
            'yamaha' => 'Yamaha',
            'suzuki' => 'Suzuki'
        ]
    ]);
});

Route::get('/pinjam', function () {
    return view('pinjam.add',[
        'optpegawai' => [
            '' =>'-Pilih salah satu -',
            '1' => "Sony Irawan - Jl Tambak Dalam Raya",
            '2' => "Alif Muhammad - Jl Arya Mukti Utara",
            '3' => "Salafudin - Jl Tanjung Sari"
        ],
        'optkendaraan' => [
            '' =>'-Pilih salah satu -',
            '1' => "Beat - Motor",
            '2' => "Brio - Mobil",
            '3' => "Satria F - Motor",
        ],
    ]);
});
*/

use App\Http\Controllers\PegawaiController;
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/add', [PegawaiController::class, 'add_new']);
Route::post('/pegawai/save', [PegawaiController::class, 'save']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete']);

Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/kendaraan/add', [KendaraanController::class, 'add_new']);
Route::post('/kendaraan/save', [KendaraanController::class, 'save']);
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit']);
Route::get('/kendaraan/delete/{id}', [KendaraanController::class, 'delete']);

use App\Http\Controllers\PinjamController;
 Route::get('/pinjam', [PinjamController::class, 'index']);
 Route::post('/pinjam/save', [PinjamController::class, 'save']);

 /*
Route::get('/kantor', function () {
    return view('kantor.main');
});
*/
use App\Http\Controllers\KantorController;
Route::get('/kantor', [KantorController::class, 'index']);
/*
Route::get('/login', function () {
    return view('kantor.login');
});
*/
Route::get('/login', [KantorController::class, 'login'])->name('login')
        ->middleware('guest');

use App\Http\Controllers\LoginController;
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
