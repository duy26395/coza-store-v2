<?php

namespace App\Repository;

use App\Repository\ProductsInterface;
use App\Repository\BaseRepository;
use App\Models\Products;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProductsRepository extends BaseRepository implements ProductsInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param Products $products
     */
    public function __construct(Products $products)
    {
        parent::__construct($products);
    }

    /**
     * @return Collection
     */
    public function get_all(): LengthAwarePaginator
    {
        return $this->model->paginate($this->model::PER_PAGE);
    }

    public function insert_data($product_company, $product_name, $description, $price, $quantity, $category_id)
    {
        return $this->model::create([
            'product_company' => $product_company,
            'product_name' => $product_name,
            'description' => $description,
            'price' => $price,
            'quantity' => $quantity,
            'category_id' => $category_id,
        ]);
    }

    public function find_by_id($id)
    {
        return $this->model::find($id);
    }

    public function update_by_id($id, $name, $time_start)
    {
        $modelTrains = $this->model::find($id);

        if (isset($name)) {
            $modelTrains->name = $name;
        }

        if (isset($time_start)) {
            $modelTrains->time_start = $time_start;
        }

        $modelTrains->save();
        return $modelTrains;
    }

    public function delete_by_id($id)
    {
        return $this->model::find($id)->delete();
    }
}
