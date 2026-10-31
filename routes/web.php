<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // ←① コントローラーのインポートを追加

// 元々入っているトップページのルーティング
Route::get('/', function () {
    return view('welcome');
});

// ② 今回追加する商品一覧のルーティング
Route::get('/products', [ProductController::class, 'index']);