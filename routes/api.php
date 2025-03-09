<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPendidikanController;


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Api pendidikan routes
// Route::prefix('pendidikan')->group(function () {
// Route::get('/', [ApiPendidikanController::class, 'getAll']);
// Route::get('/{id}', [ApiPendidikanController::class, 'getPen']);
// Route::post('/', [ApiPendidikanController::class, 'createPen']);
// Route::put('/{id}', [ApiPendidikanController::class, 'updatePen']);
// Route::delete('/{id}', [ApiPendidikanController::class, 'deletePen']);
// });