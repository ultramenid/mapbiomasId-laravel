<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeamController;
use App\Http\Middleware\checkSession;
use App\Http\Middleware\hasSession;
use App\Http\Middleware\setLanguange;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::redirect('/', 'en');

Route::middleware([setLanguange::class])->group(function () {
    Route::group(['prefix' => '{lang}'], function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/about', [PagesController::class, 'about'])->name('about');
        Route::get('/team-technic', [TeamController::class, 'index'])->name('team-technic');
        Route::get('/team-scientific', [TeamController::class, 'scientific'])->name('team-scientific');
        Route::get('/faq', [FaqController::class, 'listFaq'])->name('faq');

    });
});


//redirect to login page if user has no session
Route::middleware([checkSession::class])->group(function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index']);
    Route::get('/cms/listfaq', [FaqController::class, 'index']);
    Route::get('/cms/addfaq', [FaqController::class, 'add']);
    Route::get('/cms/editfaq/{id}', [FaqController::class, 'edit']);
    Route::get('/cms/pageabout', [PagesController::class, 'cmsabout']);


    Route::group(['prefix' => '/cms/fire-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});

//redirect to dashboard if user has session to dashboard
Route::middleware([hasSession::class])->group(function () {
    Route::get('/cms/login', [DashboardController::class, 'login']);
});

//url to logout session
Route::get('/cms/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});
