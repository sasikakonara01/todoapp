<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TaskManager;


route::get('login', [AuthManager::class, 'login'])->name("login");

route::post('loginpost', [AuthManager::class, 'loginpost'])
    ->name("login.post");

route::get("register", [AuthManager::class, "register"])->name("register");

route::post("registerpost", [AuthManager::class, "registerpost"])
    ->name("register.post");

route::middleware("auth")->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    route::get("tasks/add", [TaskManager::class, "add"])
        ->name("task.add");

    route::post("tasks/add", [TaskManager::class, "addTaskPost"])
        ->name("task.add.post");
});
