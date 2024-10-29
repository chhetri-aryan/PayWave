<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Hardcoded user data
        $users = [
            [
                'id' => 1,
                'avatar' => 'user1.jpg',
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'biography' => 'Software Engineer with 5 years of experience.',
                'position' => 'Senior Developer',
                'country' => 'USA',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'avatar' => 'user2.jpg',
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'biography' => 'Project Manager with a passion for technology.',
                'position' => 'Manager',
                'country' => 'Canada',
                'status' => 'Inactive',
            ],
            [
                'id' => 3,
                'avatar' => 'user3.jpg',
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'biography' => 'UX Designer with a keen eye for detail.',
                'position' => 'Designer',
                'country' => 'UK',
                'status' => 'Active',
            ],
        ];

        return view('adduser', compact('users'));
    }
}
