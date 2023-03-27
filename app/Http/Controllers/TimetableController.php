<?php

namespace App\Http\Controllers;

use App\Http\Requests\Timetable\TimetableCreateRequest;
use App\Models\Timetable;

/**
 * @OA\Get(
 *      path="/timetable",
 *      operationId="getTimetables",
 *      tags={"Timetables"},
 *      summary="Get list of timetables",
 *      description="Returns list of timetables",
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
 * Returns list of timetables
 *
 * @OA\Get(
 *      path="/timetable/{id}",
 *      operationId="getTimetableById",
 *      tags={"Timetables"},
 *      summary="Get timetable information",
 *      description="Returns timetable data",
 *      @OA\Parameter(
 *          name="id",
 *          description="Timetable id",
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
 * Returns specific User
 *
 * @OA\Post (
 *     path="/timetable/store",
 *     tags={"Timetables"},
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
 *                     "start":"2023-03-10 09:00:00",
 *                     "end":"2023-03-10 10:00:00",
 *                     "show_id":"1",
 *                     "advertising_id":"1"
 *                }
 *             )
 *         )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="success",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="number", example=1),
 *              @OA\Property(property="start", type="data", example="2023-03-10 09:00:00"),
 *              @OA\Property(property="end", type="data", example="2023-03-10 09:00:00"),
 *              @OA\Property(property="show_id", type="number", example=1),
 *              @OA\Property(property="advertising_id", type="number", example=1),
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
 * Create a User
 *
 */

class TimetableController extends Controller
{
    public function index()
    {
        return Timetable::all();
    }

    public function store(TimetableCreateRequest $request)
    {
        $data = $request->validated();

        Timetable::create($data);

        return 'success';
    }

    public function show(Timetable $timetable)
    {
        return $timetable;
    }

}
