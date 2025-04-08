<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiResponseTrait;

class UserService {
    use ApiResponseTrait;

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function registerUser(array $data) {
        // Validate data
        $validator = Validator::make($data, [
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "password" => "required|confirmed"
        ]);

        if ($validator->fails()) {
            return $this->errorResponse("Validation errors", $validator->errors(), 400);
        }

        $user = $this->userRepository->create($data);

        return $this->successResponse($user, "User registered successfully", 201);
    }
}
