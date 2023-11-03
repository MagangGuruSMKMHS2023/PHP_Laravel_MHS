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
    Route::get('/guru/create',[GuruController::class, "create"]);
    Route::get('/siswa/create',[SiswaController::class, "create"]);




    //route untuk aksi simpan data ke dalam database
    Route::post('/kelas/store',[KelasController::class, "store"]);
    Route::post('/guru/store',[GuruController::class, "store"]);
    Route::post('/siswa/store',[SiswaController::class, "store"]);


    //route ke form edit
    Route::get('/kelas/{kelas}/edit/',[KelasController::class,"edit"]);
    Route::get('/guru/{guru}/edit/',[GuruController::class,"edit"]);
    Route::get('/siswa/{siswa}/edit/',[SiswaController::class,"edit"]);



    //route untuk aksi update ke dalam database
    Route::put('/kelas/{kelas}',[KelasController::class, "update"]);
    Route::put('/guru/{guru}',[GuruController::class, "update"]);
    Route::put('/siswa/{siswa}',[SiswaController::class, "update"]);




    //route untuk delete 
    Route::delete('/kelas/{kelas}',[KelasController::class, "delete"]);
    Route::delete('/guru/{guru}',[GuruController::class, "delete"]);
    Route::delete('/siswa/{siswa}',[SiswaController::class, "delete"]);

    //Route untuk Searching Data
    Route::get('/carikelas', [KelasController::class, "cari"]);
    Route::get('/cariguru', [GuruController::class, "cari"]);
    Route::get('/carisiswa', [SiswaController::class, "cari"]);









});
