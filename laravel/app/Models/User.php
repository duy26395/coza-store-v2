<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const TYPE_GUEST = 0;
    public const TYPE_MEMBER = 1;
    public const TYPE_ADMIN = 2;

    public static function AuthUser(): ?Authenticatable
    {
        return self::AuthMember();
    }

    public static function AuthMember(): ?User
    {
        $user = Auth::guard('members')->user();
        if ($user instanceof User) {
            return $user;
        }
        return null;
    }

    public static function AuthAdmin(): ?User
    {
        $admin = Auth::guard('administrators')->user();
        if ($admin instanceof User) {
            return $admin;
        }
        return null;
    }
}
