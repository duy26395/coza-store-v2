<?php

namespace App\Repository;

interface ImgsProductDetailInterface
{
    public function get_all();
    public function insert_data(array $command);
    public function find_by_id($id);
    public function delete_by_id($id);
}
