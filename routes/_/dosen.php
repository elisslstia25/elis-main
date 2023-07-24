<?php

use App\Http\Controllers\Dosen\BerjalanController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\ProfilController;
use App\Http\Controllers\Dosen\PenelitianController;
use App\Http\Controllers\Dosen\SelesaiController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth:dosen'], function () {
    Route::prefix('dosen')->group(function () {
        Route::get('/', [DosenController::class, 'index']);

        Route::resource('penelitian', PenelitianController::class);


        Route::get('profil', [ProfilController::class, 'index']);
        Route::get('profil/{pegawai}/edit', [ProfilController::class, 'edit']);
        Route::put('profil/{pegawai}', [ProfilController::class, 'update']);

        Route::get('penelitian-berjalan', [BerjalanController::class, 'index']);


        Route::get('penelitian-selesai', [SelesaiController::class, 'index']);

        Route::get('penelitian-riwayat', [BerjalanController::class, 'index']);

    });
});
