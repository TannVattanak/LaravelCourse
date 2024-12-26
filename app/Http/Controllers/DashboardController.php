<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $user = [
            [
                'name' => 'Alexander',
                'age' => 30,
            ],
            [
                'name' => 'john',
                'age' => 25,
            ],
            [
                'name' => 'johnny',
                'age' => 14,
            ]
        ];
        return view('dashboard',
        [
            'users' => $user
        ]
);
    }
}
