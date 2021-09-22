<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Admin\Blog\Controllers\Article;

Route::prefix('api')->group(function () {
    Route::get('get', [Article::class, 'get']);
});