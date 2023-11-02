<?php
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    //get indexes
    Route::get('/kelas', [KelasController::class, "index"])->name('kelas.index');
    Route::get('/guru', [GuruController::class, "index"]);
    Route::get('/siswa', [SiswaController::class, "index"]);


    //route ke form tambah 
    Route::get('/kelas/create',[KelasController::class, "create"]);


    //route untuk aksi simpan data ke dalam database
    Route::post('/kelas/store',[KelasController::class, "store"]);





});
