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

    const PER_PAGE = 10;

    protected $table = 'products';

    protected $fillable = [
        'product_company',
        'product_name',
        'description',
        'price',
        'quantity',
        'category_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
