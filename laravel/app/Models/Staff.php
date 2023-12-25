<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property int $user_id
 * @property int $status
 * @property string $email
 * @property string $password
 */
class Staff extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'staffs';

    public const STATUS_DISABLED = 0;
    public const STATUS_ENABLED = 1;

    public const STATUSES = [
        self::STATUS_DISABLED => '使用不可',
        self::STATUS_ENABLED => '使用可',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'completed_at',
        'temporary_password_period',
    ];

    // created_at, updated_atの更新はObserverで一括して行う
    public $timestamps = false;
}
