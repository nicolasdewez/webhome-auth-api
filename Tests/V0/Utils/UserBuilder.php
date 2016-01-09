<?php

namespace Ndewez\WebHome\AuthApiBundle\Tests\V0\Utils;

use Ndewez\WebHome\CommonBundle\User\WebHomeUser;

/**
 * Class UserBuilder.
 */
class UserBuilder
{
    /**
     * @param string $username
     * @param string $locale
     *
     * @return WebHomeUser
     */
    public function createUser($username = 'username', $locale = 'en')
    {
        return new WebHomeUser(
            $username,
            '',
            'Firstname',
            'Lastname',
            $locale,
            'access_token',
            'refresh_token'
        );
    }
}
