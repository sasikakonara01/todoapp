<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::get('/', function () {
    return view('welcome');
})->name('home');
route::get('login', [AuthManager::class, 'login'])->name("login");

route::post('loginpost', [AuthManager::class, 'loginpost'])
    ->name("login.post");

route::get("register", [AuthManager::class, "register"])->name("register");

route::post("registerpost", [AuthManager::class, "registerpost"])
    ->name("register.post");
