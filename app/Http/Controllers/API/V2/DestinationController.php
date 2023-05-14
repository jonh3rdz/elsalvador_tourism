<?php

namespace App\Http\Controllers\API\V2;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V2\Destination\StoreDestinationRequest;
use App\Http\Resources\API\V2\Destination\DestinationCollection;
use App\Http\Resources\API\V2\Destination\DestinationResource;
use App\Models\API\V2\Destination;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DestinationCollection(Destination::all());
    }

    public function search($field, $query)
    {
        return new DestinationCollection(Destination::where($field, 'LIKE', "%$query%")->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinationRequest $request)
    {
        $destination = Destination::create($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $destination, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($idDestination)
    {
        try {
            $destination = Destination::findOrFail($idDestination);
            return response()->json(new DestinationResource($destination), 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El destination no existe'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDestinationRequest $request, $idDestination)
    {
        try {
            $destination = Destination::findOrFail($idDestination);
            $destination->update($request->all());
            return response()->json([
                'res' => true,
                'data' => $destination,
                'msg' => 'Actualizado correctamente'
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El destination no existe'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($idDestination)
    {
        try {
            $destination = Destination::findOrFail($idDestination);
            $destination->delete();

            return response()->json([
                'res' => true, //Retorna una respuesta
                'data' => $destination, //retorna toda la data
                'message' => 'Eliminado correctamente'
            ],200);
            //204 No Content
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El destination no existe'
            ], 404);
        }
    }
}
