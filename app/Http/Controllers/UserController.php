<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'Jehan Fernando',
                    'email' => 'jehan@example.com',
                    'role' => 'admin'
                ],
                [
                    'id' => 2,
                    'name' => 'Samantha Perera',
                    'email' => 'samantha@example.com',
                    'role' => 'user'
                ],
                [
                    'id' => 3,
                    'name' => 'Nimal Silva',
                    'email' => 'nimal@example.com',
                    'role' => 'user'
                ]
            ]
        ]);
    }
}
