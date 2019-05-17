<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * Login.
     */
    public function login(Request $request)
    {
        return $this->service->login($request->all());
    }

    /**
     * Logout.
     */
    public function logout(Request $request)
    {
        return $this->service->logout($request->bearerToken());
    }
}
