<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Reservation\StoreReservationRequest;
use App\Http\Requests\API\V1\Reservation\UpdateReservationRequest;
use App\Http\Resources\API\V1\Reservation\ReservationCollection;
use App\Http\Resources\API\V1\Reservation\ReservationResource;
use App\Models\API\V1\Reservation;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ReservationCollection(Reservation::all());
    }

    public function search($field, $query)
    {
        return new ReservationCollection(Reservation::where($field, 'LIKE', "%$query%")->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        $reservation = Reservation::create($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $reservation, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    public function show($idReservation)
    {
        try {
            $reservation = Reservation::findOrFail($idReservation);
            return response()->json(new ReservationResource($reservation), 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'La reservacion no existe'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, $idReservation)
    {
        try {
            $reservation = Reservation::findOrFail($idReservation);
            $reservation->update($request->all());
            return response()->json([
                'res' => true,
                'data' => $reservation,
                'msg' => 'Actualizado correctamente'
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'La reservacion no existe'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idReservation)
    {
        try {
            $reservation = Reservation::findOrFail($idReservation);
            $reservation->delete();

            return response()->json([
                'res' => true, //Retorna una respuesta
                'data' => $reservation, //retorna toda la data
                'message' => 'Eliminado correctamente'
            ],200);
            //204 No Content
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'La reservacion no existe'
            ], 404);
        }
    }
}
