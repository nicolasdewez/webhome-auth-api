<?php

namespace Ndewez\WebHome\AuthApiBundle\V0\Service;

use Ndewez\WebHome\AuthApiBundle\V0\Model\User;
use Ndewez\WebHome\AuthApiBundle\V0\Connector\WebHomeAuthConnectorInterface;

/**
 * Class WebHomeAuthClient.
 */
class WebHomeAuthClient
{
    /** @var WebHomeAuthConnectorInterface */
    private $connector;

    /**
     * @param WebHomeAuthConnectorInterface $connector
     */
    public function __construct(WebHomeAuthConnectorInterface $connector)
    {
        $this->connector = $connector;
    }

    /**
     * @param string $accessToken
     *
     * @return User
     */
    public function getByAccessToken($accessToken)
    {
        return $this->connector->getByAccessToken($accessToken);
    }
}
