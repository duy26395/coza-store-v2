<?php

namespace App\Http\Resources\Products;

use Illuminate\Http\Request;
use App\Http\Resources\Json\ResourceCollection;
use Illuminate\Contracts\Support\Arrayable;

class ProductsCollection extends ResourceCollection
{
    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return Arrayable
     */

    public function toArray(Request $request): Arrayable
    {
        return $this->collection->map(function ($product) {
            $collection = [
                'id' => $product->id,
                'product_company' => $product->product_company,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'quantity' => $product->quantity,
                'product_img' => $product->product_img,
                'description' => $product->description,
            ];

            return $collection;
        });
    }
}
