<?php

namespace App\Http\Controllers;

use App\Http\Requests\Show\ShowCreateRequest;
use App\Models\Show;

/**
 * @OA\Get(
 *      path="/shows",
 *      operationId="getShows",
 *      tags={"Shows"},
 *      summary="Get list of shows",
 *      description="Returns list of shows",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @OA\Response(response=400, description="Bad request"),
 *       security={
 *           {"app_id": {}},
 *       }
 *     )
 *
 * Returns list of shows
 *
 * @OA\Get(
 *      path="/shows/{id}",
 *      operationId="getShowById",
 *      tags={"Shows"},
 *      summary="Get show information",
 *      description="Returns show data",
 *      @OA\Parameter(
 *          name="id",
 *          description="Show id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 * )
 *
 * Returns specific Show
 *
 * @OA\Post (
 *     path="/shows/store",
 *     tags={"Shows"},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                      type="object",
 *                      @OA\Property(
 *                          property="name",
 *                          type="string"
 *                      )
 *                 ),
 *                 example={
 *                     "title":"Show",
 *                     "description":"Show with people",
 *                     "duration_minutes":45
 *                }
 *             )
 *         )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="success",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="number", example=1),
 *              @OA\Property(property="title", type="string", example="Show"),
 *              @OA\Property(property="description", type="string", example="Show with people"),
 *              @OA\Property(property="duration_minutes", type="number", example="50"),
 *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
 *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
 *          )
 *      ),
 *      @OA\Response(
 *          response=400,
 *          description="invalid",
 *          @OA\JsonContent(
 *              @OA\Property(property="msg", type="string", example="fail"),
 *          )
 *      )
 * )
 *
 * Create a Show
 *
 */

class ShowController extends Controller
{
    public function index()
    {
        return Show::all();
    }

    public function store(ShowCreateRequest $request)
    {
        $data = $request->validated();

        Show::create($data);

        return 'success';
    }

    public function show(Show  $show)
    {
        return $show;
    }

    public function indexView()
    {
        return view('admin.show');
    }

}
