<?php

namespace App\Services;

use App\Repository\ImgsProductDetailRepository;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class ImgsProductDetailService
{
    protected $imgsProductsRepository;

    public function __construct(ImgsProductDetailRepository $imgsProductsRepository)
    {
        $this->imgsProductsRepository = $imgsProductsRepository;
    }

    public function insertData($product_id, $product_img)
    {
        $product_id = (int) $product_id;
        $name = $product_img->getClientOriginalName();;

        $img_extension = $product_img->getClientOriginalExtension();
        $img_content =  $product_img->get();
        $uuid = Uuid::uuid4();


        Storage::disk('s3')->put($uuid . '.' . $img_extension, $img_content);

        $product_img_detail = $this->imgsProductsRepository->insert_data([
            'product_id' => $product_id,
            'name' => $name,
            'uuid' => $uuid
        ]);

        return $product_img_detail;
    }

    public function findById($id)
    {
        return $this->imgsProductsRepository->find_by_id($id);
    }

    public function updateById($id, $request)
    {
    }

    public function deleteById($id)
    {
        return $this->imgsProductsRepository->delete_by_id($id);
    }
}
