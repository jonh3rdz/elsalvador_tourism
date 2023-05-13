<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Activity\StoreActivityRequest;
use App\Http\Requests\API\V1\Activity\UpdateActivityRequest;
use App\Http\Resources\API\V1\Activity\ActivityCollection;
use App\Http\Resources\API\V1\Activity\ActivityResource;
use App\Models\API\V1\Activity;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ActivityCollection(Activity::all());
    }

    public function search($field, $query)
    {
        return new ActivityCollection(Activity::where($field, 'LIKE', "%$query%")->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
        $activity = Activity::create($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $activity, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    public function show($idActivity)
    {
        try {
            $activity = Activity::findOrFail($idActivity);
            return response()->json(new ActivityResource($activity), 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El Activity no existe'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, $idActivity)
    {
        try {
            $activity = Activity::findOrFail($idActivity);
            $activity->update($request->all());
            return response()->json([
                'res' => true,
                'data' => $activity,
                'msg' => 'Actualizado correctamente'
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El activity no existe'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idActivity)
    {
        try {
            $activity = Activity::findOrFail($idActivity);
            $activity->delete();

            return response()->json([
                'res' => true, //Retorna una respuesta
                'data' => $activity, //retorna toda la data
                'message' => 'Eliminado correctamente'
            ],200);
            //204 No Content
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'El activity no existe'
            ], 404);
        }
    }
}
