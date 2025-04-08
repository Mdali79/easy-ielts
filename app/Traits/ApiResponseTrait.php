<?php

namespace App\Traits;

trait ApiResponseTrait {

    protected function successResponse($data = [], $message = "Success", $statusCode = 200) {
        return response()->json([
            "status" => true,
            "message" => $message,
            "data" => $data
        ], $statusCode);
    }

    protected function errorResponse($message = "Error", $errors = [], $statusCode = 400) {
        return response()->json([
            "status" => false,
            "message" => $message,
            "errors" => $errors
        ], $statusCode);
    }
}
