<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password'])
        ]);

        $token = $user->createToken(Config::get('hashing.token_name'))->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();
        if($user){
            if(Hash::check($fields['password'], $user->password)){
                $token = $user->createToken(Config::get('hashing.token_name'))->plainTextToken;

                $response = [
                    'user' => $user,
                    'token' => $token
                ];

                return response($response, 200);
            }
        }

        $response = [
            'success' => false,
            'message' => 'Invalid credentials',
        ];

        return response($response, 401);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        $response = [
            'success' => true,
            'message' => 'Logged out',
        ];

        return response($response, 200);
    }
}
