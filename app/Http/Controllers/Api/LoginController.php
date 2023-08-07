<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = auth()->user()->createToken('Login');
            return ['user' => auth()->user(),'token' => $user->plainTextToken];
        }else{
            return response()->json([
                'status' => 'fail',
                'msg' => 'Invalid email or password !'
            ]);
        }

    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => 'success',
            'msg' => 'User logged out !'
        ]);
    }
}
