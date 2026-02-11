<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuscriberController;

//index: mostrar subscriptor
Route::get('suscribers', [SuscriberController::class, 'index']);
Route::post('suscribers', [SuscriberController::class, 'store']);

//

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
