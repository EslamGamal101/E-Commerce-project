<?php

use App\Http\Controllers\Api\ApiContactController;
use App\Http\Controllers\Api\ApiShopController;
use App\Http\Controllers\Api\ApiTestmonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;



###Store message###
Route::post('/contact',ApiContactController::class);

Route::get('/testmonials',[ApiTestmonialController::class,'getTestmonials']);

Route::post('/testmonials/store',[ApiTestmonialController::class,'addTestmonial']);


Route::controller(ApiShopController::class)->group(function(){
    Route::get('shop/products','products');
    Route::post('shop/product/add','addProduct');
    Route::get('/product-details/{id}','productDetails');
});