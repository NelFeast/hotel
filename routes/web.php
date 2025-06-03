<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->group(function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('/', fn() => redirect()->route('admin.login'))->name('index');
        Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'index'])->name('login');
        Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login.store');
    });
    Route::middleware('admin')->group(function () {
        Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
        Route::get('cache/clear', [App\Http\Controllers\Admin\IndexController::class, 'clearCache'])->name('cache.clear');
        Route::name('dashboard.')->prefix('dashboard')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
        });
    });
});

Route::middleware('user.guest')->group(function () {
    Route::name('auth.')->prefix('auth')->group(function () {
        Route::get('{provider}', [App\Http\Controllers\Frontend\Auth\SocialAuthController::class, 'redirectToProvider'])->name('social.redirect');
        Route::get('{provider}/callback', [App\Http\Controllers\Frontend\Auth\SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');
    });
    Route::get('login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'index'])->name('login');
    Route::post('login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'login'])->name('login.store');
    Route::get('register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'index'])->name('register');
    Route::post('register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'register'])->name('register.store');
    Route::get('password/recover', [App\Http\Controllers\Frontend\Auth\ForgotPasswordController::class, 'index'])->name('password.request');
    Route::post('password/recover', [App\Http\Controllers\Frontend\Auth\ForgotPasswordController::class, 'requestResetLink'])->name('password.email');
    Route::get('password/reset', [App\Http\Controllers\Frontend\Auth\ResetPasswordController::class, 'index'])->name('password.reset');
    Route::post('password/reset', [App\Http\Controllers\Frontend\Auth\ResetPasswordController::class, 'resetPassword'])->name('password.update');
});
Route::post('logout', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'logout'])->name('logout');
Route::middleware('user')->group(function () {
    Route::get('start', [App\Http\Controllers\Frontend\DashboardController::class, 'index'])->name('start');
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [App\Http\Controllers\Frontend\ProfileController::class, 'index'])->name('index');
    });
});
