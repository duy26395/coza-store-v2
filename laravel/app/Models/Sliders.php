<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $title
 * @property string|null $type
 * @property string|null $image_url
 */
class Sliders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sliders';

    protected $fillable = [
        'title',
        'type',
        'image_url',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
