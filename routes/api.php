<?php

use App\Http\Controllers\API\V1\ActivityController;
use App\Http\Controllers\API\V1\DestinationController;
use App\Http\Controllers\API\V1\HotelController;
use App\Http\Controllers\API\V1\ReservationController;
use App\Http\Controllers\API\V1\RestaurantController;
use App\Http\Controllers\API\V1\ReviewController;
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

    //routes activities
    Route::get('activities', [ActivityController::class,'index']);
    Route::get('search/activities/{field}/{query}', [ActivityController::class,'search']);
    Route::post('activities', [ActivityController::class,'store']);
    Route::get('activities/{idActivity}', [ActivityController::class,'show']);
    Route::put('activities/{idActivity}', [ActivityController::class,'update']);
    Route::delete('activities/{idActivity}', [ActivityController::class,'destroy']);

    //routes reservations
    Route::get('reservations', [ReservationController::class,'index']);
    Route::get('search/reservations/{field}/{query}', [ReservationController::class,'search']);
    Route::post('reservations', [ReservationController::class,'store']);
    Route::get('reservations/{idReservation}', [ReservationController::class,'show']);
    Route::put('reservations/{idReservation}', [ReservationController::class,'update']);
    Route::delete('reservations/{idReservation}', [ReservationController::class,'destroy']);

    //routes reviews
    Route::get('reviews', [ReviewController::class,'index']);
    Route::get('search/reviews/{field}/{query}', [ReviewController::class,'search']);
    Route::post('reviews', [ReviewController::class,'store']);
    Route::get('reviews/{idReview}', [ReviewController::class,'show']);
    Route::put('reviews/{idReview}', [ReviewController::class,'update']);
    Route::delete('reviews/{idReview}', [ReviewController::class,'destroy']);
});
