<?php

use App\Http\Controllers\API\V1\DestinationController;
use App\Http\Controllers\API\V1\HotelController;
use App\Http\Controllers\API\V1\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1'],
function(){
    //routes destinations
    Route::get('destinations', [DestinationController::class,'index']);
    Route::post('destinations', [DestinationController::class,'store']);
    Route::get('destinations/{idDestination}', [DestinationController::class,'show']);
    Route::put('destinations/{idDestination}', [DestinationController::class,'update']);
    Route::delete('destinations/{idDestination}', [DestinationController::class,'destroy']);

    //routes hotels
    Route::get('hotels', [HotelController::class,'index']);
    Route::get('search/hotels/{field}/{query}', [HotelController::class,'search']);
    Route::post('hotels', [HotelController::class,'store']);
    Route::get('hotels/{idHotel}', [HotelController::class,'show']);
    Route::put('hotels/{idHotel}', [HotelController::class,'update']);
    Route::delete('hotels/{idHotel}', [HotelController::class,'destroy']);

    //routes resturants
    Route::get('restaurants', [RestaurantController::class,'index']);
    Route::get('search/restaurants/{field}/{query}', [RestaurantController::class,'search']);
    Route::post('restaurants', [RestaurantController::class,'store']);
    Route::get('restaurants/{idRestaurant}', [RestaurantController::class,'show']);
    Route::put('restaurants/{idRestaurant}', [RestaurantController::class,'update']);
    Route::delete('restaurants/{idRestaurant}', [RestaurantController::class,'destroy']);
});
