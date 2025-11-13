<?php

use App\Http\Controllers\Api\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message'=> 'Hello, API']);
});

Route::get('/reservations', [ReservationController::class, 'index']); //összes foglalás
Route::get('/reservations/{id}', [ReservationController::class, 'show']); //egy foglalás
Route::post('/reservations', [ReservationController::class, 'store']); //egy foglalás rögzítése (insert into)
Route::put('/reservations/{id}', [ReservationController::class, 'update']); //egy foglalás minden mezőjét módosítom
Route::post('/reservations/{id}', [ReservationController::class, 'update']); //egy foglalás néhány mezőjét módosítom
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']); //egy foglalás törlése

