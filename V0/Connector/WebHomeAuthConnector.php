<?php

namespace Ndewez\WebHome\AuthApiBundle\V0\Connector;

use GuzzleHttp\Client;
use Ndewez\WebHome\CommonBundle\Client\AbstractClient;

/**
 * Class WebHomeAuthConnector.
 */
class WebHomeAuthConnector extends AbstractClient implements WebHomeAuthConnectorInterface
{
    const URL_GET_BY_ACCESS_TOKEN = '/users/access-token/%s';

    /**
     * @param Client $client
     * @param string $baseUrl
     * @param int    $version
     */
    public function __construct(Client $client, $baseUrl, $version)
    {
        parent::__construct($client, $baseUrl, $version);
    }

    /**
     * {@inheritdoc}
     */
    public function getByAccessToken($accessToken)
    {
        $response = $this->client->get(
            $this->generateUrl(sprintf(self::URL_GET_BY_ACCESS_TOKEN, $accessToken))
        );

        return $this->deserialize($response, 'Ndewez\WebHome\CommonBundle\User\WebHomeUser');
    }
}
