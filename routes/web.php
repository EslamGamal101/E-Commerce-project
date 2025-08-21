<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestmonialController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)->name('front.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/why_us','why')->name('why');
    Route::get('/testmonial','testmonial')->name('testmonial');
    Route::get('/contact','contact')->name('contact');
    Route::get('/shop','shop')->name('shop');
    Route::get('/product-details/{id}','productDetails')->name('product_details') ; 
    Route::get('/add-to-cart/{id}}','add_to_cart')->name('add_to_cart')->middleware(['auth', 'verified']);
    Route::get('/mycart','myCart')->name('myCart')->middleware(['auth', 'verified']);
    Route::post('/order-confirm','orderConfirm')->name('orderConfirm')->middleware(['auth', 'verified']);
    Route::delete('/delete-product{cart}','productDestroy')->name('productDestroy')->middleware(['auth', 'verified']);
    ####Send message 
    Route::post('/sendmessage','sendMessageFromContactPage')->name('sendMessage');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(AdminController::class)->middleware(['auth','admin'])->name('admin.')->group(function(){
    Route::resource('admins',AdminController::class);
    
     
    //Category Route
    Route::resource('categories',CategoryController::class);
    //Route::get('/categories',[CategoryController::class,'search'])->name('categories.search');
    //Testmonial 
    Route::resource('testmonials',TestmonialController::class);
    //Orders
    Route::get('/orders','adminOrderIndex')->name('orders.index');
    //delete order from admin
    Route::delete('/delete-order-from-admin/{order}','delete_order_from_admin')->name('order.delete');
    //show Orders page from admin panal 
    Route::get('/order_show/{order}','admin_order_show')->name('order.show');

    //change order status from admin panal 
    Route::get('/order-status-change/{order}','change_order_status')->name('order.edit-status');
});

//User Dashboard 
Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routes/web.php
Route::get('/test-algolia', function () {
    $client = \Algolia\AlgoliaSearch\SearchClient::create(
        config('scout.algolia.id'),
        config('scout.algolia.secret')
    );

    try {
        $indices = $client->listIndices();
        return response()->json($indices);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

Route::controller(FrontController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

require __DIR__.'/auth.php';

