<?php

use App\Http\Controllers\AssignmentController;
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


//Question 1
Route::get('/question1', [AssignmentController::class, 'Question1']);


//Question 2
Route::get('/question2', [AssignmentController::class, 'Question2']);


//Question 3
Route::get('/question3/{page}', [AssignmentController::class, 'Question3']);


//Question 4
Route::get('/question4', [AssignmentController::class, 'Question4']);


//Question 5
Route::get('/question5', [AssignmentController::class, 'Question5']);