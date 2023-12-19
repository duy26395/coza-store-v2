<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $member_id
 * @property int $total_cost
 * @property string $status
 * @property string $address
 * @property string $status
 * @property string $phone_number
 * @property string|null $email
 * @property Members $member
 */
class Orders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'member_id',
        'total_cost',
        'status',
        'address',
        'phone_number',
        'email',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
