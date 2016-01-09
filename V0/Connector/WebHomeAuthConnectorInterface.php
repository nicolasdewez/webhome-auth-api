<?php

namespace Ndewez\WebHome\AuthApiBundle\V0\Connector;

use Ndewez\WebHome\CommonBundle\User\WebHomeUser;

/**
 * Interface WebHomeAuthConnectorInterface.
 */
interface WebHomeAuthConnectorInterface
{
    /**
     * @param string $accessToken
     *
     * @return WebHomeUser
     */
    public function getByAccessToken($accessToken);
}
