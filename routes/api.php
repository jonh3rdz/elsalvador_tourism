<?php

use App\Http\Controllers\API\V1\DestinationController;
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
    Route::get('destinations', [DestinationController::class,'index']);
    Route::post('destinations', [DestinationController::class,'store']);
    Route::get('destinations/{idDestination}', [DestinationController::class,'show']);
    Route::put('destinations/{idDestination}', [DestinationController::class,'update']);
    Route::delete('destinations/{idDestination}', [DestinationController::class,'destroy']);
});

// php artisan make:model API/V1/Country -mfs
// php artisan make:controller API/V1/CountryController --api
// php artisan make:resource API/V1/Country/CountryResource
// php artisan make:resource API/V1/Country/CountryCollection
// php artisan make:request API/V1/Country/StoreCountryRequest
// php artisan make:request API/V1/Country/UpdateCountryRequest
