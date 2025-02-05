<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Redis::incr('test');

    return Redis::get('test');
});

Route::get('/users', [UserController::class, 'index']);
