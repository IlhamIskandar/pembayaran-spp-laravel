<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SppPaymentController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\SppController;
use App\Http\Controllers\admin\ClassController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\StaffController;

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
Route::get('/siswa', [HomeController::class, 'studentIndex'])->name('student.index');

Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');

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
	Route::prefix('staff')->group(function(){
		Route::get('/', [StaffController::class, 'index'])->name('admin.staff.index');
		Route::get('/tambah', [StaffController::class, 'create'])->name('admin.staff.create');
		Route::post('/tambah/store', [StaffController::class, 'store'])->name('admin.staff.store');
		Route::delete('/{nisn}/destroy', [StaffController::class, 'destroy'])->name('admin.staff.destroy');
		Route::get('/{nisn}/edit', [StaffController::class, 'edit'])->name('admin.staff.edit');
		Route::put('/{nisn}/edit/update', [StaffController::class, 'update'])->name('admin.staff.update');
		Route::get('/{nisn}', [StaffController::class, 'show'])->name('admin.staff.show');
	});
});

Route::prefix('staff')->middleware('checkRole:admin, staff')->group(function(){
		Route::get('/entry', [SppPaymentController::class, 'index'])->name('spp.entry');
		Route::get('/riwayat', [SppPaymentController::class, 'index'])->name('spp.history');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
