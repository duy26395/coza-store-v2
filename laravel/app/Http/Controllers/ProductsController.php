<?php

namespace App\Http\Controllers;

use App\Http\Resources\Products\ProductsCollection;
use App\Http\Resources\Products\ProductsResource;
use App\Repository\ProductsRepository;
use App\Services\ProductService;
use App\Http\Requests\Products\CreateRequest;

class ProductsController extends Controller
{
    protected $product;
    protected $productService;

    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productService = new ProductService($productsRepository);
    }


    public function index(): ProductsCollection
    {
        $res = $this->productService->getAllData();

        return new ProductsCollection($res);
    }

    public function create(CreateRequest $request)
    {
        $res = $this->productService->insertData($request);

        return new ProductsResource($res);
    }

    public function show($id)
    {
        $res = $this->productService->findById($id);

        return new ProductsResource($res);
    }

    // public function update($id, TrainsUpdateRequest $request)
    // {
    //     $res = $this->productService->updateById($id, $request);
    //     return new DataResource($res);
    // }

    // public function destroy($id)
    // {
    //     $this->productService->deleteById($id);
    //     return response()->json([], Response::HTTP_NO_CONTENT);
    // }
}
