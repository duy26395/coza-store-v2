<?php

namespace App\Repository;

use App\Repository\ImgsProductDetailInterface;
use App\Repository\BaseRepository;
use App\Models\Img_product_detail;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ImgsProductDetailRepository extends BaseRepository implements ImgsProductDetailInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param Products $products
     */
    public function __construct(Img_product_detail $img_product_detail)
    {
        parent::__construct($img_product_detail);
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
            'product_id' => $command['product_id'],
            'name' => $command['name'],
            'uuid' => $command['uuid']
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
