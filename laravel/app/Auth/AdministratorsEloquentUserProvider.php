<?php

namespace App\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Auth\UserProvider;

class AdministratorsEloquentUserProvider extends EloquentUserProvider implements UserProvider
{
    /**
     * validateCredentials をオーバーライドして、仮パスワードによる認証検査を行う。
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
