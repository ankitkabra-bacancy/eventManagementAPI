<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function allStates()
    {
        return response()->json([
            'users' => User::count(),
            'events' => 0,
            'comments' => 0,
            'posts' => 0
        ]);
    }
}
