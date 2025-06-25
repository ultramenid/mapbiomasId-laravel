<?php

use App\Http\Controllers\IndexController;
use App\Http\Middleware\setLanguange;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'en');

Route::middleware([setLanguange::class])->group(function () {
    Route::group(['prefix' => '{lang}'], function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');

    });
});
