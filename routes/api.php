<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Question 1
Route::post('/question1', [AssignmentController::class, 'Question1']);


//Question 2
Route::get('/question2', [AssignmentController::class, 'Question2']);


//Question 3
Route::get('/question3/{page}', [AssignmentController::class, 'Question3']);


//Question 4
Route::get('/question4', [AssignmentController::class, 'Question4']);


//Question 5
Route::get('/question5', [AssignmentController::class, 'Question5']);


//Question 6
Route::get('/question6', [AssignmentController::class, 'Question6']);


//Question 7
Route::post('/submit', [AssignmentController::class, 'Question7']);
