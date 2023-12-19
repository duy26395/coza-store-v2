<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ResCollection;

class LoginAction extends Controller
{
    //
    public function __invoke(Request $request) : ResCollection {
        return new ResCollection(
            $request
        );
    }
}
