<?php

namespace App\Http\Controllers;

use App\Services\User\UserService;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;



/**
 * @OA\Info(
 *      title="My API Documentation",
 *      version="1.0.0",
 *      description="API documentation for my Laravel project"
 * )
 *
 * @OA\Tag(
 *     name="Authentication",
 *     description="API Endpoints for Authentication"
 * )
 */
class AuthController extends Controller
{
    //
    use ApiResponseTrait;

    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }


    /**
     * @OA\Post(
     *     path="/api/v1/register",
     *     summary="Register a new user",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "password", "password_confirmation"},
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", format="email", example="john@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123"),
     *             @OA\Property(property="password_confirmation", type="string", example="password123")
     *         )
     *     ),
     *     @OA\Response(response=201, description="User registered successfully"),
     *     @OA\Response(response=400, description="Validation errors")
     * )
     */

     
    public function registerUser(Request $request) {
        $response = $this->userService->registerUser($request->all());

        if ($response['status']) {
            return $this->successResponse($response['data'], $response['message'], 201);
        } else {
            return $this->errorResponse($response['message'], $response['errors'], 400);
        }
    }
}
