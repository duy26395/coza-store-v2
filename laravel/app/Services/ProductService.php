<?php

namespace App\Services;

use App\Repository\ProductsRepository;
use App\Repository\ProductsInterface;

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
        return $this->productRepository->insert_data($request->name, $request->time_start);
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
