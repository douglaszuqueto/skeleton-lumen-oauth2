<?php

namespace App;

use App\User;

class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];

        $user = User::where($credentials)->first();
        if ($user) {
            return $user;
        }

        return false;
    }
}
