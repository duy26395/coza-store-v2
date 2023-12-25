<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ResCollection;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;

class LoginAction extends Controller
{
    //
    public function __invoke(Request $request): ResCollection
    {
        if (!Auth::guard('staffs')->attempt($request->only(['email', 'password']))) {
            throw new AuthenticationException();
        }
    
        $request->session()->regenerate();

        return new ResCollection(User::AuthStaff());
    }
}
