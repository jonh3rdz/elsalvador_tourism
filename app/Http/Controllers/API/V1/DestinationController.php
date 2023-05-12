<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Destination\StoreDestinationRequest;
use App\Http\Requests\API\V1\Destination\UpdateDestinationRequest;
use App\Http\Resources\API\V1\Destination\DestinationCollection;
use App\Http\Resources\API\V1\Destination\DestinationResource;
use App\Models\API\V1\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        return new DestinationCollection(Destination::all());
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
    public function show(Destination $idDestination)
    {
        return response()->json(new DestinationResource($idDestination),200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $idDestination)
    {
        $idDestination->update($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $idDestination, //retorna toda la data
            'msg' => 'Actualizado correctamente' //Retorna un mensaje
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idDestination)
    {
        $destination = Destination::findOrFail($idDestination);

        $destination->delete();

        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $destination, //retorna toda la data
            'message' => 'Eliminado correctamente'
        ],200);
        //204 No Content
    }
}
