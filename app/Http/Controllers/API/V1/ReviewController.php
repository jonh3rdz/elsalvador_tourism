<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Review\StoreReviewRequest;
use App\Http\Requests\API\V1\Review\UpdateReviewRequest;
use App\Http\Resources\API\V1\Review\ReviewCollection;
use App\Http\Resources\API\V1\Review\ReviewResource;
use App\Models\API\V1\Review;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ReviewCollection(Review::all());
    }

    public function search($field, $query)
    {
        return new ReviewCollection(Review::where($field, 'LIKE', "%$query%")->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        $review = Review::create($request->all());
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $review, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    public function show($idReview)
    {
        try {
            $review = Review::findOrFail($idReview);
            return response()->json(new ReviewResource($review), 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'La review no existe'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, $idReview)
    {
        try {
            $review = Review::findOrFail($idReview);
            $review->update($request->all());
            return response()->json([
                'res' => true,
                'data' => $review,
                'msg' => 'Actualizado correctamente'
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'La review no existe'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idReview)
    {
        try {
            $review = Review::findOrFail($idReview);
            $review->delete();

            return response()->json([
                'res' => true, //Retorna una respuesta
                'data' => $review, //retorna toda la data
                'message' => 'Eliminado correctamente'
            ],200);
            //204 No Content
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'res' => false,
                'msg' => 'La review no existe'
            ], 404);
        }
    }
}
