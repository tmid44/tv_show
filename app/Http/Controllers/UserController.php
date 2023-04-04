<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use App\Models\User;

/**
 * @OA\Get(
 *      path="/users",
 *      operationId="getUsers",
 *      tags={"Users"},
 *      summary="Get list of users",
 *      description="Returns list of users",
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
 * Returns list of users
 *
 * @OA\Get(
 *      path="/users/{id}",
 *      operationId="getUserById",
 *      tags={"Users"},
 *      summary="Get show information",
 *      description="Returns show data",
 *      @OA\Parameter(
 *          name="id",
 *          description="User id",
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
 *     path="/users/store",
 *     tags={"Users"},
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
 *                     "name":"Alex",
 *                     "email":"alex123@gmail.com",
 *                     "password":"12345678"
 *                }
 *             )
 *         )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="success",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="number", example=1),
 *              @OA\Property(property="name", type="string", example="John"),
 *              @OA\Property(property="email", type="string", example="user@user.com"),
 *              @OA\Property(property="password", type="number"),
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

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();

        User::create($data);

        return 'success';
    }

    public function show(User $user)
    {
        return $user;
    }

    public function indexView()
    {
        return view('admin.user');
    }
}
