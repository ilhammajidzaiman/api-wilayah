<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/provinsi')->controller(Api\WilayahProvinsiController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
});
Route::prefix('/kabupaten')->controller(Api\WilayahKabupatenController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
});
Route::prefix('/kecamatan')->controller(Api\WilayahKecamatanController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
});
Route::prefix('/desa')->controller(Api\WilayahDesaController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
});
