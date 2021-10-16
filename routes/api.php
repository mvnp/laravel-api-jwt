<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlocksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('blocks', [BlocksController::class, 'index']);
Route::get('blocks/{id}', [BlocksController::class, 'show']);
Route::post('blocks', [BlocksController::class, 'store']);
Route::put('blocks/{id}', [BlocksController::class, 'update']);
Route::delete('blocks/{id}', [BlocksController::class, 'destroy']);
