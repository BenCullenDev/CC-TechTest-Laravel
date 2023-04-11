<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

Route::get('/', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/store', [QuizController::class, 'store'])->name('quizzes.store');
Route::get('/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quizzes.destroy');

