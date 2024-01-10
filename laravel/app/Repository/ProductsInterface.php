<?php

namespace App\Repository;

interface ProductsInterface
{
    public function get_all();
    public function insert_data(array $command);
    public function find_by_id($id);
    public function update_by_id(int $id, array $command);
    public function delete_by_id($id);
}
