<?php

declare(strict_types=1);

namespace App\Auth;

use Carbon\Carbon;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Auth\UserProvider;

class MemberEloquentUserProvider extends EloquentUserProvider implements UserProvider
{
    /**
     * validateCredentials
     *
     * @param UserContract $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        return parent::validateCredentials($user, $credentials);
    }
}
