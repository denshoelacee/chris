<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserFeeder
{
    public static function authenticateUser($email, $password)
    {
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return Auth::user();
        }
        return null;
    }

    public static function createUser($data)
    {
        // Create a new user instance
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']); // Hash the password
        $user->role = $data['role'];
        $user->save();

        return $user;
    }
}