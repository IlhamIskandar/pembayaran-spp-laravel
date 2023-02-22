<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\SppController;
use App\Http\Controllers\admin\ClassController;
use App\Http\Controllers\admin\StudentController;

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

Route::prefix('admin')->middleware('checkRole:admin')->group(function(){
	Route::get('/', [AdminController::class, 'index'])->name('admin.index');
	Route::prefix('spp')->group(function(){
		Route::get('/', [SppController::class, 'index'])->name('admin.spp.index');
		Route::get('/tambah', [SppController::class, 'create'])->name('admin.spp.create');
		Route::post('/tambah/store', [SppController::class, 'store'])->name('admin.spp.store');
		Route::delete('/{id_spp}/destroy', [SppController::class, 'destroy'])->name('admin.spp.destroy');
		Route::get('/{id_spp}/edit', [SppController::class, 'edit'])->name('admin.spp.edit');
		Route::put('/{id_spp}/edit/update', [SppController::class, 'update'])->name('admin.spp.update');
	});
	Route::prefix('kelas')->group(function(){
		Route::get('/', [ClassController::class, 'index'])->name('admin.class.index');
		Route::get('/tambah', [ClassController::class, 'create'])->name('admin.class.create');
		Route::post('/tambah/store', [ClassController::class, 'store'])->name('admin.class.store');
		Route::delete('/{id_class}/destroy', [ClassController::class, 'destroy'])->name('admin.class.destroy');
		Route::get('/{id_class}/edit', [ClassController::class, 'edit'])->name('admin.class.edit');
		Route::put('/{id_class}/edit/update', [ClassController::class, 'update'])->name('admin.class.update');
	});
	Route::prefix('siswa')->group(function(){
		Route::get('/', [StudentController::class, 'index'])->name('admin.student.index');
		Route::get('/tambah', [StudentController::class, 'create'])->name('admin.student.create');
		Route::post('/tambah/store', [StudentController::class, 'store'])->name('admin.student.store');
		Route::delete('/{nisn}/destroy', [StudentController::class, 'destroy'])->name('admin.student.destroy');
		Route::get('/{nisn}/edit', [StudentController::class, 'edit'])->name('admin.student.edit');
		Route::put('/{nisn}/edit/update', [StudentController::class, 'update'])->name('admin.student.update');
		Route::get('/{nisn}', [StudentController::class, 'show'])->name('admin.student.show');
	});
});

Route::prefix('staff')->middleware('checkRole:staff')->group(function(){

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
