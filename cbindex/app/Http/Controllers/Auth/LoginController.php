<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';
    protected $maxAttempts = 3; // strict login attempts
    protected $decayMinutes = 1;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // CUSTOM FAILED LOGIN RESPONSE
    public function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => ['Incorrect email or password!'],
        ]);
    }
}
