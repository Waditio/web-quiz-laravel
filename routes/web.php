<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', [QuizController::class, 'showLogin'])->name('login');
Route::post('/login', [QuizController::class, 'processLogin'])->name('login.process');
Route::get('/logout', [QuizController::class, 'logout'])->name('logout');

Route::get('/dashboard', [QuizController::class, 'showDashboard'])->name('dashboard');
Route::get('/absensi', [QuizController::class, 'showAbsensi'])->name('absensi');
Route::post('/absensi/simpan', [QuizController::class, 'simpanAbsensi'])->name('absensi.simpan');

// PASTIKAN TIGA BARIS INI ADA DAN SAMA PERSIS:
Route::get('/materi/{id}', [QuizController::class, 'showMateri'])->name('materi');
Route::get('/quiz/{id}', [QuizController::class, 'showQuiz'])->name('quiz');
Route::post('/quiz/submit/{id}', [QuizController::class, 'submitQuiz'])->name('quiz.submit');

use App\Http\Controllers\SiswaController;

// Rute untuk mengelola CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');