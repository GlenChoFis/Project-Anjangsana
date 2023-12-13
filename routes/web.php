<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MountainController;
use App\Http\Controllers\gunungController;
use App\Http\Controllers\menuUtamaController;
use App\Http\Controllers\perizinanController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;

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
    return view('login');
});
Route::middleware(['auth', 'isAdmin:admin'])->group(function(){
    Route::get('/admin', [adminController::class, 'index']);
    Route::get('/cek/{id_perizinan}', [adminController::class, 'verif']);
    Route::post('/update-status', [adminController::class, 'updateVerif']);
    Route::post('/update-berita', [adminController::class, 'updateBerita']);
    Route::get('/adminupdatestatus', [adminController::class, 'indexStatusGunung']);
    Route::post('/updateStatusGunung', [adminController::class, 'updateStatusGunung']);
    Route::get('/tambahDaftarGunung', [adminController::class, 'indexTambahGunung']);
    Route::get('/indexBerita', [adminController::class, 'indexBerita']);;
    Route::get('/indexUpdateBerita/{id}', [adminController::class, 'indexUpdateBerita']);
    Route::post('/updateBerita', [adminController::class, 'beritaUpdate']);
    Route::post('/tambahgunung', [adminController::class, 'insertGunung']);
    Route::get('/adminupdateberita', function () {
        return view('adminupdateberita');
    });
});
Route::middleware(['auth', 'isAdmin:user'])->group(function(){
    Route::get('/menuutama', [menuUtamaController::class, 'index']);
    Route::get('/berita',[menuUtamaController::class, 'berita']);
    Route::get('/berita/{judul}',[menuUtamaController::class, 'detailBerita']);
    Route::get('/perizinan', [perizinanController::class, 'index']);
    Route::post('/createizin',[perizinanController::class, 'insert']);
    Route::get('/status',[perizinanController::class, 'statusPerizinan']);
    Route::get('/batalkanpesanan/{id_perizinan}', [perizinanController::class, 'batalkanPesanan']);
    Route::get('/histori', [perizinanController::class, 'indexHistory']);
    Route::post('/updateProfile', [regisController::class, 'updateProfile']);
    Route::get('/invoice/{id}', [perizinanController::class, 'invoice']);
    Route::get('/profil', function () {
        return view('profil');
    });

});

// Route::get('/histori', function () {
//     return view('histori');
// });

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/perizinan', function () {
//     return view('perizinan');
// });
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/registrasi', [regisController::class, 'index']);
Route::post('/register', [regisController::class, 'insert']);
// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/registrasi', function () {
//     return view('registrasi');
// });

// Route::get('/admin', [adminController::class, 'index']);
// Route::get('/cek/{id_perizinan}', [adminController::class, 'verif']);
// Route::post('/update-status', [adminController::class, 'updateVerif']);
// Route::post('/update-berita', [adminController::class, 'updateBerita']);
// Route::get('/adminupdatestatus', [adminController::class, 'indexStatusGunung']);
// Route::post('/updateStatusGunung', [adminController::class, 'updateStatusGunung']);
// Route::get('/tambahDaftarGunung', [adminController::class, 'indexTambahGunung']);
// Route::post('/tambahgunung', [adminController::class, 'insertGunung']);

// Route::get('/adminupdateberita', function () {
//     return view('adminupdateberita');
// });

// Route::get('/adminupdatestatus', function () {
//     return view('adminupdatestatus');
// });

// Route::get('/cek/{perizinan}', function () {
//     return view('cek');
// });



// Route::resource('perizinan', mountainController::class);
// Route::get('/perizinan', [mountainController::class, "index"]);

// Route::resource('perizinan', gunungController::class);
// Route::get('/perizinan', [perizinanController::class, 'index']);
// Route::post('/createizin',[perizinanController::class, 'insert']);
// Route::get('/status',[perizinanController::class, 'statusPerizinan']);
// Route::get('/batalkanpesanan/{id_perizinan}', [perizinanController::class, 'batalkanPesanan']);
// Route::get('/histori', [perizinanController::class, 'indexHistory']);
