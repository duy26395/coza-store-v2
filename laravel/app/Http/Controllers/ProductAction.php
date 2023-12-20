<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductAction extends Controller
{
    public function __invoke(Request $request, Products $products): ResCollection
    {
        return new ResCollection(
            $products
        );
    }
}
