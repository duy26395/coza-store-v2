<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $product_id
 * @property string $name_img
 */
class Img_product_detail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'img_product_detail';

    protected $fillable = [
        'product_id',
        'name',
        'uuid'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
