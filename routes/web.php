<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('index');
})->name('index');

Route::view('/', 'index')->name('home');
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::view('/withdraw-request', 'withdraw-request')->name('withdraw-request');
Route::get('/account', [\App\Http\Controllers\AccountController::class, 'index'])->name('account');
Route::get('/faq', [\App\Http\Controllers\FaqController::class, 'index'])->name('faq');
Route::view('/faucet', 'faucet')->name('faucet');
Route::view('/forget-password', 'forget-password')->name('forget-password');
Route::get('/game', [\App\Http\Controllers\GameController::class, 'index'])->name('game');
Route::view('/investment', 'investment')->name('investment');
Route::view('/leaderboard', 'leaderboard')->name('leaderboard');
Route::view('/login', 'login')->name('login');
Route::view('/logout', 'logout')->name('logout');
Route::view('/register', 'register')->name('register');
Route::get('/security', [\App\Http\Controllers\SecurityController::class, 'index'])->name('security');
Route::get('/support', [\App\Http\Controllers\SupportController::class, 'index'])->name('support');
Route::view('/terms', 'terms')->name('terms');
Route::get('/transfer', [\App\Http\Controllers\TransferController::class, 'index'])->name('transfer');
