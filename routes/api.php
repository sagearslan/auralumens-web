<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrackController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Tracks API endpoints
Route::prefix('tracks')->group(function () {
    Route::get('/', [TrackController::class, 'index']); // GET /api/tracks
    Route::get('/health', [TrackController::class, 'health']); // GET /api/tracks/health
    Route::get('/{id}', [TrackController::class, 'show']); // GET /api/tracks/{id}
    Route::get('/{id}/metadata', [TrackController::class, 'metadata']); // GET /api/tracks/{id}/metadata
    Route::get('/{trackId}/audio/{filename}', [TrackController::class, 'audio']); // GET /api/tracks/{id}/audio/{filename}
});
