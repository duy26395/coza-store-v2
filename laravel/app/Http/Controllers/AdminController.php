<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ResCollection;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    public function LoginAction(Request $request)
    {
        if (!Auth::guard('administrators')->attempt($request->only(['email', 'password']))) {
            throw new AuthenticationException();
        }

        $request->session()->regenerate();

        return new ResCollection(User::AuthAdmin());
    }

    public function LogoutAction(Request $request)
    {
        Auth::guard('administrators')->logout();
        $request->session()->invalidate();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
