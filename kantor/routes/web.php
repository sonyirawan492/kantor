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
    return view('ptms');
});
Route::get('/info', function () {
    return view('info', ['jabatan'=>'HRD']);
});

use App\Http\Controllers\infoController;
Route::get('/info/{kd}', [infoController::class, 'infoPgw']);
/*
Route::get('/pegawai', function () {
    return view('pegawai.add',[
        'is_update' => 0,
        'optkategori' => [
            '' =>'-Pilih salah satu -',
            'hrd' => 'HRD',
            'staff operaional' => 'Staff Operasional',
            'admin' => 'Admin',
            'manager operasional' => 'Manager Operasional',
            'kurir' => 'Kurir'
        ]
    ]);
});
*/
use App\Http\Controllers\PegawaiController;
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/add', [PegawaiController::class, 'add_new']);
Route::post('/pegawai/save', [PegawaiController::class, 'save']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete']);