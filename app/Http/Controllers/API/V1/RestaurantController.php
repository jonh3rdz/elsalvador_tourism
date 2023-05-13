<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Restaurant\StoreRestaurantRequest;
use App\Http\Requests\API\V1\Restaurant\UpdateRestaurantRequest;
use App\Http\Resources\API\V1\Restaurant\RestaurantCollection;
use App\Http\Resources\API\V1\Restaurant\RestaurantResource;
use App\Models\API\V1\Restaurant;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new RestaurantCollection(Restaurant::all());
    }

    public function search($field, $query)
    {
        return new RestaurantCollection(Restaurant::where($field, 'LIKE', "%$query%")->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $restaurant = Restaurant::create($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $restaurant, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($idRestaurant)
    {
        try {
            $restaurant = Restaurant::findOrFail($idRestaurant);
            return response()->json(new RestaurantResource($restaurant), 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El restaurant no existe'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, $idRestaurant)
    {
        try {
            $restaurant = Restaurant::findOrFail($idRestaurant);
            $restaurant->update($request->all());
            return response()->json([
                'res' => true,
                'data' => $restaurant,
                'msg' => 'Actualizado correctamente'
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El restaurant no existe'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idRestaurant)
    {
        try {
            $restaurant = Restaurant::findOrFail($idRestaurant);
            $restaurant->delete();

            return response()->json([
                'res' => true, //Retorna una respuesta
                'data' => $restaurant, //retorna toda la data
                'message' => 'Eliminado correctamente'
            ],200);
            //204 No Content
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El restaurant no existe'
            ], 404);
        }
    }
}
