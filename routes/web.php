<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'getHome'])->name('getHome');
Route::get('/tuyen-dung', [MainController::class, 'getTuyenDung']);
Route::get('/ve-chung-toi', [MainController::class, 'getAboutUs']);
Route::get('/tin-tuc', [MainController::class, 'getNews']);
Route::get('/tin-tuc/{slug}', [MainController::class, 'getNewsDetail']);
Route::get('/tim-kiem', [MainController::class, 'getSearch']);
Route::get('/tim-kiem/{search}/{codeType}/{priceType}/{phoneType}', [MainController::class, 'getSearchResult']);
Route::get('/goi-cuoc/{code}', [MainController::class, 'getCode']);
