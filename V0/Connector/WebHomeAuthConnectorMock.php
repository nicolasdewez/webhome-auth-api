<?php

namespace Ndewez\WebHome\AuthApiBundle\V0\Connector;

use Ndewez\WebHome\AuthApiBundle\Tests\V0\Utils\UserBuilder;

/**
 * Class WebHomeAuthConnectorMock.
 */
class WebHomeAuthConnectorMock implements WebHomeAuthConnectorInterface
{
    /** @var UserBuilder */
    private $userBuilder;

    /**
     * @param UserBuilder $userBuilder
     */
    public function __construct(UserBuilder $userBuilder)
    {
        $this->userBuilder = $userBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getByAccessToken($accessToken)
    {
        return $this->userBuilder->createUser('username');
    }
}
