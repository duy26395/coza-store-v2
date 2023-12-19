<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity
 * @property string|null $size
 * @property string|null $color
 * @property string|null $description
 */
class Order_detail extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'order_detail';

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'size',
        'color',
        'description',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
