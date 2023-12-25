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
     * validateCredentials をオーバーライドして、仮パスワードによる認証検査を行う。
     *
     * @param UserContract $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        // dump($credentials);

        // if (Carbon::now() <= $user->temporary_password_period) {

        //     $plain = $credentials['password'];

        //     if ($this->hasher->check($plain, $user->temporary_password)) return true;
        // }
        return parent::validateCredentials($user, $credentials);
    }
}
