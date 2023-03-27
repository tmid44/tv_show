<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      x={
 *          "logo": {
 *              "url": "https://via.placeholder.com/190x90.png?text=L5-Swagger"
 *          }
 *      },
 *      title="API for tv",
 *      description="API for tv shows",
 *      @OA\Contact(
 *          email="example@gmail.com"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="https://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *     @OA\Server(
 *          url="http://127.0.0.1:8000/api",
 *          description="API for tv server"
 *  )
 *     @OA\Tag(
 *          name="Shows",
 *          description="Show creating"
 * )
 *      @OA\Tag(
 *          name="Advertising",
 *          description="Advertising creating"
 * )
 *      @OA\Tag(
 *          name="Timetables",
 *          description="Timetable creating"
 * )
 *      @OA\Tag(
 *          name="Users",
 *          description="User creating"
 * )
 *     @QA\SecurityScheme(
 *          type="apiKey",
 *          in="header",
 *          name="X-APP-ID",
 *          securityScheme="X-APP-ID"
 * )

 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
