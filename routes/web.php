<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagsController;
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

Route::resource('quiz', QuizController::class);
Route::post('/quiz/export', [QuizController::class, 'export'])->name('quiz.export');
Route::get('/quiz/{quiz}/showQuizQuestions', [App\Http\Controllers\QuizController::class, 'showQuizQuestions'])->name('quiz.showQuizQuestions');
Route::post('/quiz/{quiz}/showQuizQuestions', [App\Http\Controllers\QuizController::class, 'storeQuizQuestions'])->name('quiz.storeQuizQuestions');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('questions', QuestionController::class);
Route::resource('tags', TagsController::class);

require __DIR__.'/auth.php';
