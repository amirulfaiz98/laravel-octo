<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your Api!
|
*/

Route::prefix('v1')->group(function()
{
    Route::get('/movie/genre', [App\Http\Controllers\Api\MovieController::class, 'movieGenre']);
    Route::get('/movie/timeslot', [App\Http\Controllers\Api\MovieController::class, 'movieTimeslot']);
    Route::get('/movie/performer', [App\Http\Controllers\Api\MovieController::class, 'moviePerformer']);
    Route::get('/movie/new', [App\Http\Controllers\Api\MovieController::class, 'movieNew']);

    Route::post('/movie/rating', [App\Http\Controllers\Api\MovieController::class, 'movieRating']);
    Route::post('/movie/add', [App\Http\Controllers\Api\MovieController::class, 'movieAdd']);
});


