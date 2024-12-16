<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchBarController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//Authintication

Route::controller(AuthController::class)->group(function(){
<<<<<<< HEAD
    Route::post('register','Register');
    Route::post('login','Login');
    Route::middleware('Token')->group(function(){
        Route::post('logout','Logout');
        Route::post('refreshToken','Refresh');
    });
});

=======
Route::post('register','Register');
Route::post('login','Login');
Route::middleware('Token')->group(function(){
    Route::post('logout','Logout');
    Route::post('refreshToken','Refresh');
});
Route::controller(UserController::class)->group(function(){
    Route::middleware('Token')->group(function(){
    Route::get('UserInfo','getUserInfo');
    });
});
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
    Route::controller(StoreController::class)->group(function(){
        Route::post('store/create','Create');
        Route::post('store/addbranch','AddBranch');
        Route::post('store/deletebranch','DeleteBranch');
<<<<<<< HEAD
        Route::delete('store/delete/{name}','DeleteStore');
        Route::delete('store/delete/all','DeleteAll');
        Route::get('stores/get','Index');
        Route::get('store/products/{name}','GetStoreProducts');
        Route::get('governorate/stores/{name}','GetGovernorateStores');
});
Route::controller(ProductController::class)->group(function(){
Route::post('product/add','Create');
Route::delete('product/delete/{name}', 'Delete');
Route::delete('products/delete/{name}','DeleteForStore');
=======
        Route::delete('store/delete/{id}','DeleteStore');
        Route::delete('store/delete/all','DeleteAll');
        Route::get('stores/get','Index');
        Route::get('store/products/{id}','GetStoreProducts');
        Route::get('governorate/stores/{id}','GetGovernorateStores');
});
Route::controller(ProductController::class)->group(function(){
Route::post('product/add','Create');
Route::delete('product/delete/{id}', 'Delete');
Route::delete('products/delete/{id}','DeleteAllForStore');
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
});
Route::controller(SearchBarController::class)->group(function(){
    Route::post('search','Search');
});
<<<<<<< HEAD
=======
});
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
