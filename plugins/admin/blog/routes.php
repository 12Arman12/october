<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Admin\Blog\Controllers\ArticlesGetController;

Route::prefix('api')->group(function () {
    Route::get('get', [ArticlesGetController::class, 'get']);
});