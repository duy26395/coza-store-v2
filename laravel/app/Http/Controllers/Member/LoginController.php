<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ResCollection;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function LoginAction(Request $request)
    {
        if (!Auth::guard('members')->attempt($request->only(['email', 'password']))) {
            throw new AuthenticationException();
        }

        $request->session()->regenerate();

        return new ResCollection(User::AuthMember());
    }

    public function LogoutAction(Request $request)
    {
        Auth::guard('members')->logout();
        $request->session()->invalidate();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
