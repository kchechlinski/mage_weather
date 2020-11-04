<?php declare(strict_types=1);

namespace Codeal\Weather\Service\Api;

use Codeal\Weather\Api\WeatherApiConnectorManagementInterface;
use Codeal\Weather\Exceptions\ApiConnectorException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientFactory;
use GuzzleHttp\Psr7\ResponseFactory;

class OpenWeatherApiConnectorService implements WeatherApiConnectorManagementInterface
{
    /**
     * @var ClientFactory
     */
    private $clientFactory;
    /**
     * @var ResponseFactory
     */
    private $responseFactory;
    /**
     * @var string
     */
    private $apiUrl;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $apiKey;

    public function __construct(
        ClientFactory $clientFactory,
        ResponseFactory $responseFactory,
        string $apiUrl = '',
        string $city = '',
        string $apiKey = ''
    ) {
        $this->clientFactory = $clientFactory;
        $this->responseFactory = $responseFactory;
        $this->apiUrl = $apiUrl;
        $this->city = $city;
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     * @throws ApiConnectorException
     */
    public function getWeatherData()
    {
        /** @var Client $client */
        $client = $this->clientFactory->create();
        $response = $client->get(
            $this->getConnectionUri()
        );

        return (string) $response->getBody();
    }

    /**
     * @return string
     * @throws ApiConnectorException
     */
    private function getConnectionUri(): string
    {
        if (empty($this->apiUrl) || empty($this->city) || empty($this->apiKey)) {
            throw new ApiConnectorException(__('Invalid connection data.'));
        }

        return $this->apiUrl . '?q=' . $this->city . '&appid=' . $this->apiKey;
    }
}
