<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BmiLogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ExercisesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('workouts', WorkoutController::class);
Route::apiResource('schedules', ScheduleController::class);
Route::apiResource('bmi-logs', BmiLogController::class);
Route::apiResource('categories', CategoriesController::class);
Route::apiResource('exercises', ExercisesController::class);