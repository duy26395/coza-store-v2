<?php

namespace App\Services;

use App\Repository\ProductsRepository;
use App\Repository\ImgsProductDetailRepository;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class ProductService
{
    protected $productRepository;
    protected $imgsProductsRepository;

    public function __construct(ProductsRepository $productsRepository, ImgsProductDetailRepository $imgsProductsRepository)
    {
        $this->productRepository = $productsRepository;
        $this->imgsProductsRepository = $imgsProductsRepository;
    }

    public function getAllData()
    {
        return $this->productRepository->get_all();
    }

    public function insertData($request)
    {
        $product_company = $request->product_company;
        $product_name = $request->product_name;
        $description = $request->description;
        $price = (int) $request->price;
        $quantity = (int) $request->quantity;

        $img_name = $request->product_img->getClientOriginalName();
        $img_extension = $request->product_img->getClientOriginalExtension();
        $img_content =  $request->product_img->get();
        $uuid = Uuid::uuid4();
        $category_id = (int) $request->category_id;
        $command  = [
            'product_company' => $product_company,
            'product_name' => $product_name,
            'description' => $description,
            'price' => $price * 1000,
            'quantity' => $quantity,
            'category_id' => $category_id,
        ];

        $product = $this->productRepository->insert_data($command);

        $this->imgsProductsRepository->insert_data([
            'product_id' => $product->id,
            'name' => $img_name,
            'uuid' => $uuid
        ]);

        Storage::disk('s3')->put($uuid . '.' . $img_extension, $img_content);

        return $product;
    }

    public function findById($id)
    {
        return $this->productRepository->find_by_id($id);
    }

    public function updateById($id, $request)
    {
        return $this->productRepository->update_by_id($id, $request->name, $request->time_start);
    }

    public function deleteById($id)
    {
        return $this->productRepository->delete_by_id($id);
    }
}
