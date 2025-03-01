<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HunterController;
use App\Http\Controllers\QuestTrackerController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('quests', QuestController::class);
Route::apiResource('hunters', HunterController::class)->except(['update']);
Route::apiResource('quest-tracker', QuestTrackerController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');