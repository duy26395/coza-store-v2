<?php

namespace App\Repository;

interface ProductsInterface
{
    public function get_all();
    public function insert_data($name, $time_start);
    public function find_by_id($id);
    public function delete_by_id($id);
}
