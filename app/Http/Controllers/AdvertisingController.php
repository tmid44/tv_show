<?php

namespace App\Http\Controllers;

use App\Http\Requests\Advertising\AdvertisingCreateRequest;
use App\Models\Advertising;

/**
 * @OA\Get(
 *      path="/advertising",
 *      operationId="getAdvertising",
 *      tags={"Advertising"},
 *      summary="Get list of advertising",
 *      description="Returns list of advertising",
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
 * Returns list of countries
 *
 * @OA\Get(
 *      path="/advertising/{id}",
 *      operationId="getAdvertisingById",
 *      tags={"Advertising"},
 *      summary="Get show information",
 *      description="Returns show data",
 *      @OA\Parameter(
 *          name="id",
 *          description="Advertising id",
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
 * Returns specific Advertising
 *
 * @OA\Post (
 *     path="/advertising/store",
 *     tags={"Advertising"},
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
 *                     "product":"Water",
 *                     "audience":"All",
 *                     "budget":10000,
 *                     "duration_minutes":4
 *
 *                }
 *             )
 *         )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="success",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="number", example=1),
 *              @OA\Property(property="product", type="string", example="Water"),
 *              @OA\Property(property="audience", type="string", example="Adult"),
 *              @OA\Property(property="budget", type="number", example="10000"),
 *              @OA\Property(property="duration_minutes", type="number", example="4"),
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
 * Create Advertising
 *
 *
 */

class AdvertisingController extends Controller
{
    public function index()
    {
        return Advertising::all();
    }

    public function store(AdvertisingCreateRequest $request)
    {
        $data = $request->validated();

        Advertising::create($data);

        return 'success';
    }

    public function show(Advertising $advertising)
    {
        return $advertising;
    }

}
