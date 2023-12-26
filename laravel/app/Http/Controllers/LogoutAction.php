<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class LogoutAction extends Controller
{
    //
    public function __invoke(Request $request)
    {
        Auth::guard('members')->logout();
        $request->session()->invalidate();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
