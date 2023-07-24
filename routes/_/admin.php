<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BerjalanController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PenelitianController;
use App\Http\Controllers\Admin\PengabdianController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function() {
        
        Route::get('/', [AdminController::class, 'dashboard']);
        Route::resource('admin', AdminController::class);
        Route::resource('pegawai', PegawaiController::class);
        

        Route::get('penelitian', [PenelitianController::class,'index']);
        Route::get('penelitian/{penelitian}', [PenelitianController::class,'show']);
        Route::put('penelitian/update-status/{penelitian}', [PenelitianController::class, 'status']);

        Route::get('penelitian-berjalan', [BerjalanController::class, 'index']);

        Route::get('penelitian-selesai', [BerjalanController::class, 'index']);

        Route::get('penelitian-riwayat', [BerjalanController::class, 'index']);



        Route::get('pengabdian', [PengabdianController::class,'index']);
        Route::get('pengabdian/{pengabdian}', [PengabdianController::class,'show']);
        Route::put('pengabdian/update-status/{pengabdian}', [PengabdianController::class, 'status']);

        Route::get('pengabdian-berjalan', [BerjalanController::class, 'index']);

        Route::get('pengabdian-selesai', [BerjalanController::class, 'index']);

        Route::get('pengabdian-riwayat', [BerjalanController::class, 'index']);
        

});

});

