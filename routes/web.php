<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogHarianController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
Route::get('/register', [RegisterController::class, 'getRegister']);
Route::post('/postRegister', [RegisterController::class, 'postRegister']);
//Route::get('register', 'RegisterController@getRegister');
Route::get('/login', [LoginController::class, 'getLogin'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin']);

Route::get('/', [HomeController::class, 'home']);

Route::get('/logout', function () {
     Auth::logout();
     return view ('auth.loginbaru');
 });

Route::get('/admin', function(){
    return view ('admin.dashboard');
})->name('admin');

// Route::get('/karyawan', function(){
//     return view ('user.index');
// })->name('karyawan');

Route::middleware('auth:web')->group(function () {
    Route::get('/home', function () {return redirect('/karyawan');});
    Route::get('/karyawan', [KaryawanController::class, 'dashboard'])->name('karyawan');
    // Route::get('/karyawanTahun', [KaryawanController::class, 'dashboardTahun'])->name('karyawan');
    Route::get('/detailKaryawan', [KaryawanController::class, 'detailKaryawan'])->name('profilkaryawan');
    // Route::post('/detailKaryawan', [KaryawanController::class, 'updateKaryawan']);
    Route::get('/editKaryawan', [KaryawanController::class, 'editKaryawan'])->name('profilkaryawan');
    Route::post('/editKaryawan', [KaryawanController::class, 'updateKaryawan'])->name('profilkaryawan');
    Route::get('/editPasswordKaryawan', [KaryawanController::class, 'editPW'])->name('profilkaryawan');
    Route::post('/posteditpass', [KaryawanController::class, 'gantiPassword'])->name('profilkaryawan');
    Route::get('/logharian', [LogHarianController::class, 'index'])->name('logharian');
    Route::post('/logharian/store', [LogHarianController::class, 'store'])->name('logharian');
    // Route::get('/tablelogharian', [LogHarianController::class, 'view'])->name('karyawan');
    Route::get('/logharian/edit/{id}', [LogHarianController::class, 'edit'])->name('logharian');
    Route::post('/logharian/update/{id}', [LogHarianController::class, 'update'])->name('logharian');
    Route::get('/logharian/hapus/{id}', [LogHarianController::class, 'delete'])->name('karyawan');
    // Route::get('/modallogout', [LogHarianController::class, 'modalLO']);
    Route::get('/logharian/print/{id}', [LogHarianController::class, 'generatePrint'])->name('karyawan');

    

});

// Route::middleware('auth:admin')->group(function () {
    // Route::middleware('namaRole:admin')
    //     ->group(function () {

    Route::get('/home', function () {return redirect('/dashboard/admin');});
    Route::get('/dashboard/admin', [AdminController::class, 'dashboard']);
    // Route::get('/dashboard/admin/listAkun', [AdminController::class, 'listAkun']);
    Route::get('/admin/detailAdmin', [AdminController::class, 'detailAdmin'])->name('profiladmin');
    Route::get('/admin/editAdmin', [AdminController::class, 'editAdmin'])->name('profiladmin');
    Route::post('/admin/editAdmin', [AdminController::class, 'updateAdmin'])->name('profiladmin');
    Route::get('/admin/editPasswordAdmin', [AdminController::class, 'editPWAdmin'])->name('profiladmin');
    Route::post('/admin/posteditpassAdmin', [AdminController::class, 'gantiPasswordAdmin'])->name('profiladmin');

    Route::get('/admin/tablekaryawan', [AdminController::class, 'index'])->name('tambahkaryawan');
    Route::get('/admin/tambahkaryawan', [AdminController::class, 'tambahKaryawan'])->name('tambahkaryawan');
    Route::post('/admin/tambahkaryawan/store', [AdminController::class, 'store'])->name('tambahkaryawan');
    Route::get('/admin/karyawan/edit/{id}', [AdminController::class, 'edit'])->name('tambahkaryawan');
    Route::post('/admin/karyawan/update/{id}', [AdminController::class, 'update'])->name('tambahkaryawan');
    Route::get('/admin/karyawan/hapus/{id}', [AdminController::class, 'delete'])->name('tambahkaryawan');
    
    Route::get('/admin/resetPassword', [AdminController::class, 'resetPw'])->name('resetPassword');
    Route::get('/admin/getresetPassword/{id}', [AdminController::class, 'reset'])->name('resetPassword');

    // Route::get('/searchTable', [AdminController::class, 'searchTable'])->name('tambahkaryawan');
    // Route::get('/searchReset', [AdminController::class, 'searchReset'])->name('resetPassword');


    // });
//  });
