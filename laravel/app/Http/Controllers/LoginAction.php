<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ResCollection;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginAction extends Controller
{
    //
    public function __invoke(Request $request): ResCollection
    {

        if (!Auth::guard('users')->attempt($request->only(['email', 'password']))) {
            throw new Exception('ahihi do ngok', 401);
        }
        $request->session()->regenerate();

        return new ResCollection(User::AuthMember());
    }
}
