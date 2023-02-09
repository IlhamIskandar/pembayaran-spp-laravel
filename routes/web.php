<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\SppController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');

Route::get('/siswa', [HomeController::class, 'index'])->name('student.index');

Route::get('/entry-spp', [StaffController::class, 'index'])->name('spp.entry');

Route::prefix('admin')->group(function(){
	Route::get('/', [AdminController::class, 'index'])->name('admin.index');
	Route::prefix('spp')->group(function(){
		Route::get('/', [SppController::class, 'index'])->name('admin.spp.index');
		Route::get('/tambah', [SppController::class, 'create'])->name('admin.spp.create');
		Route::post('/tambah/store', [SppController::class, 'store'])->name('admin.spp.store');
		Route::delete('/{id_spp}/destroy', [SppController::class, 'destroy'])->name('admin.spp.destroy');
		Route::get('/{id_spp}/edit', [SppController::class, 'edit'])->name('admin.spp.edit');

	});
});