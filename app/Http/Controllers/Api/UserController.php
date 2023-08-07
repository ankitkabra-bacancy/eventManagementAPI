<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers(Request $request){

        $users = User::when($request->search,function($q){
            $q->where('name','LIKE','%'.request()->search.'%')
              ->orWhere('email','LIKE','%'.request()->search.'%')
              ->orWhere('role','LIKE','%'.request()->search.'%');
        })->paginate($request->perpage);

        return response()->json($users,200);

    }
}
