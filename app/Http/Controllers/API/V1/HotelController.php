<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Hotel\StoreHotelRequest;
use App\Http\Requests\API\V1\Hotel\UpdateHotelRequest;
use App\Http\Resources\API\V1\Hotel\HotelCollection;
use App\Http\Resources\API\V1\Hotel\HotelResource;
use App\Models\API\V1\Hotel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new HotelCollection(Hotel::all());
    }

    public function search($field, $query)
    {
        return new HotelCollection(Hotel::where($field, 'LIKE', "%$query%")->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHotelRequest $request)
    {
        $hotel = Hotel::create($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $hotel, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($idHotel)
    {
        // return response()->json(new HotelResource($idHotel),200);
        try {
            $hotel = Hotel::findOrFail($idHotel);
            return response()->json(new HotelResource($hotel), 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El hotel no existe'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelRequest $request, $idHotel)
    {
        // $idHotel->update($request->all());
        // return response()->json([
        //     'res' => true, //Retorna una respuesta
        //     'data' => $idHotel, //retorna toda la data
        //     'msg' => 'Actualizado correctamente' //Retorna un mensaje
        // ],201);
        try {
            $hotel = Hotel::findOrFail($idHotel);
            $hotel->update($request->all());
            return response()->json([
                'res' => true,
                'data' => $hotel,
                'msg' => 'Actualizado correctamente'
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El hotel no existe'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idHotel)
    {
        // $hotel = Hotel::findOrFail($idHotel);

        // $hotel->delete();

        // return response()->json([
        //     'res' => true, //Retorna una respuesta
        //     'data' => $hotel, //retorna toda la data
        //     'message' => 'Eliminado correctamente'
        // ],200);
        // //204 No Content

        try {
            $hotel = Hotel::findOrFail($idHotel);
            $hotel->delete();

            return response()->json([
                'res' => true, //Retorna una respuesta
                'data' => $hotel, //retorna toda la data
                'message' => 'Eliminado correctamente'
            ],200);
            //204 No Content
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El hotel no existe'
            ], 404);
        }
    }
}
