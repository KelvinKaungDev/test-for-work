<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Providers\Service\UserService;

class AuthController extends Controller
{

    public function user()
    {
        return Auth::user();
    }

    public function register(RegisterRequest $request)
    {
        $result = UserService::register($request -> validated());

        return response() -> json([
            'result' => 'Success'
        ]);
    }

    public function login(LoginRequest $request)
    {
        $result = UserService::login($request -> validated());

        return response() -> json([
            'token' => $result
        ]);
    }

    public function logout(Request $request)
    {
        $result = UserService::logout($request);

        return response() -> json([
            'result' => $result
        ]);
    }
}
