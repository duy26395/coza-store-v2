<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductAction extends Controller
{
    // protected $products;
    // public function ___construct(Products $products) {
    //     $this->products = $products;
    //     dd($this->products);
    // }
    //
    public function __invoke(Request $request, Products $products): ResCollection
    {
        dd($request->ahihi);
        // $query = Products::all();
        // $id = $request->route()->parameter('product_id');
        // $query = Products::find($id);
        // dd($request->route()->parameter('products'));

        return new ResCollection(
            self::get_data($request->route()->parameter('product_id'), $products)
        );
    }
    public function get_data($id, Products $products)
    {
        dump($id, $products);
        die;
        return $id = $products->id;
    }
}
