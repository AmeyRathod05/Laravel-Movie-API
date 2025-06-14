<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    /**
     * Display a listing of the movies.
     */
    public function index(): JsonResponse
    {
        $movies = Movie::all();
        return response()->json([
            'status' => 'success',
            'data' => $movies
        ]);
    }

    /**
     * Store a newly created movie in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'genre_id' => 'nullable|exists:genres,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $movie = Movie::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Movie created successfully',
            'data' => $movie
        ], 201);
    }

    /**
     * Display the specified movie.
     */
    public function show($id): JsonResponse
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'status' => 'error',
                'message' => 'Movie not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $movie
        ]);
    }

    /**
     * Update the specified movie in storage.
     */
    public function update(Request $request, $id): JsonResponse
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'status' => 'error',
                'message' => 'Movie not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'director' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer|min:1900|max:' . (date('Y') + 1),
            'genre_id' => 'nullable|exists:genres,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $movie->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Movie updated successfully',
            'data' => $movie
        ]);
    }

    /**
     * Remove the specified movie from storage.
     */
    public function destroy($id): JsonResponse
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'status' => 'error',
                'message' => 'Movie not found'
            ], 404);
        }

        $movie->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Movie deleted successfully'
        ]);
    }
}
