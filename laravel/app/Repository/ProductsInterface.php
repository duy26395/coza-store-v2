<?php

namespace App\Repository;

interface ProductsInterface
{
    public function get_all();
    public function insert_data($product_company, $product_name, $description, $price, $quantity, $category_id);
    public function find_by_id($id);
    public function delete_by_id($id);
}
