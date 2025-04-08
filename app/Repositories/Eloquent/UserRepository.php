<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

    public function create(array $data): User {
        return User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => bcrypt($data['password'])
        ]);
    }
}
