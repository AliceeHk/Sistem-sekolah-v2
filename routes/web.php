<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Menejemen data siswa
Route::name('students.')->prefix('students')->group(function () {
    // Menampilkan daftar data
    Route::get('/', [StudentController::class, 'index'])->name('index');
    // Menampilkan form penambahan data
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    // Menyimpan data baru
    Route::post('/store', [StudentController::class, 'store'])->name('store');
    // Menampilkan detail satu data
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');
    // Menampilkan form perubahan data
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');
    // Memperbarui data
    Route::put('/{id}/update', [StudentController::class, 'update'])->name('update');
    // Menghapus data
    Route::delete('/{id}/delete', [StudentController::class, 'destroy'])->name('destroy');
});

//Menejemen data guru
Route::name('teachers.')->prefix('teachers')->group(function () {
    // Menampilkan daftar data
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    // Menampilkan form penambahan data
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    // Menyimpan data baru
    Route::post('/store', [TeacherController::class, 'store'])->name('store');
    // Menampilkan detail satu data
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');
    // Menampilkan form perubahan data
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
    // Memperbarui data
    Route::put('/{id}/update', [TeacherController::class, 'update'])->name('update');
    // Menghapus data
    Route::delete('/{id}/delete', [TeacherController::class, 'destroy'])->name('destroy');
});

//Menejemen data kelas (invokable)
Route::name('classes.')->prefix('classes')->group(function () {
    // Menampilkan daftar data
    Route::get('/', IndexController::class)->name('index');
    // Menampilkan form penambahan data
    Route::get('/create', CreateController::class)->name('create');
    // Menyimpan data baru
    Route::post('/store', StoreController::class)->name('store');
    // Menampilkan detail satu data
    Route::get('/{id}', ShowController::class)->name('show');
    // Menampilkan form perubahan data
    Route::get('/{id}/edit', EditController::class)->name('edit');
    // Memperbarui data
    Route::put('/{id}/update', UpdateController::class)->name('update');
    // Menghapus data
    Route::delete('/{id}/delete', DestroyController::class)->name('destroy');
});

