<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('index');
})->name('index');

Route::view('/', 'index')->name('home');
Route::view('/user', 'user')->name('user');
Route::view('/withdraw-request', 'withdraw-request')->name('withdraw-request');
Route::view('/account', 'account')->name('account');
Route::view('/faq', 'faq')->name('faq');
Route::view('/faucet', 'faucet')->name('faucet');
Route::view('/forget-password', 'forget-password')->name('forget-password');
Route::view('/game', 'game')->name('game');
Route::view('/investment', 'investment')->name('investment');
Route::view('/leaderboard', 'leaderboard')->name('leaderboard');
Route::view('/login', 'login')->name('login');
Route::view('/logout', 'logout')->name('logout');
Route::view('/register', 'register')->name('register');
Route::view('/security', 'security')->name('security');
Route::view('/support', 'support')->name('support');
Route::view('/supportshow', 'supportshow')->name('supportshow');
Route::view('/terms', 'terms')->name('terms');
Route::view('/transfer', 'transfer')->name('transfer');
