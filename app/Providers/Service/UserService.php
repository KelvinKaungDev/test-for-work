<?php

namespace App\Providers\Service;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class UserService {
    public static function register(array $data)
    {
        $data['password'] = Hash::make($data['password']);

        $user =  User::create($data);

        return $user;
    }

    public static function login(array $data)
    {
        if (!Auth::attempt($data)) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user   = Auth::user();
        $token  = $user -> createToken('token') -> plainTextToken;

        return $token;
    }

    public static function logout($request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'token' => 'Logout Successfully',
        ], 200);
    }
}
