<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $full_name
 * @property string $email_address
 * @property string $phone_number
 * @property string $password
 */
class Members extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'members';

    protected $dates = [
        'full_name',
        'email',
        'phone_number',
        'password',
        'created_at',
        'updated_at',
    ];

}
