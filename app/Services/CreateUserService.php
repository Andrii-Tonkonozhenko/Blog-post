<?php

namespace App\Services;

use App\User;

class CreateUserService
{
    public function createUser(string $name, string $email, string $password) : User
    {
        $user = new User();

        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);

        $user->save();

        return $user;
    }
}
