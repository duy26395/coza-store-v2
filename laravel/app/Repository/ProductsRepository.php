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

    public function insert_data($command)
    {
        return $this->model::create([
            'product_company' => $command['product_company'],
            'product_name' => $command['product_name'],
            'description' => $command['description'],
            'price' => $command['price'],
            'quantity' => $command['quantity'],
            'category_id' => $command['category_id'],
        ]);
    }

    public function find_by_id($id)
    {
        return $this->model::find($id);
    }

    public function update_by_id($id, $command)
    {
        $modelProduct = $this->model::find($id);


        $modelProduct->update($command);
        $modelProduct->save();

        return $modelProduct;
    }

    public function delete_by_id($id)
    {
        return $this->model::find($id)->delete();
    }
}
