<?php

namespace App\Services;

use App\Repository\ProductsRepository;
use App\Repository\ProductsInterface;
use Exception;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productRepository = $productsRepository;
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
        $product_img = $request->product_img;

        $img_name = $request->product_img->getClientOriginalName();
        $img_extension = $request->product_img->getClientOriginalExtension();
        $img_content =  $request->product_img->get();
        $uuid = Uuid::uuid4();
        $path = $uuid . '.' . $img_extension;
        try {
            $res = Storage::disk('s3')->put($path, $img_content);
        } catch (Exception $th) {
            throw new $th;
        }

        $category_id = (int) $request->category_id;

        return $this->productRepository->insert_data($product_company, $product_name, $description, $price, $quantity, $category_id);
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
