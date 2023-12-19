<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property int $id
 * @property string $title
 * @property string|null $type
 * @property string|null $images_url
 */
class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'banner';

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
