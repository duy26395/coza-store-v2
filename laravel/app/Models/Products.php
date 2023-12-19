<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $product_company
 * @property string $product_name
 * @property string|null $description
 * @property int $price
 * @property int $quantity
 * @property string $product_img
 * @property int $category_id
 * @property Category $category
 */
class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
