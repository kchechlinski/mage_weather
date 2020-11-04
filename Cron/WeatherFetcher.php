<?php declare(strict_types=1);

namespace Codeal\Weather\Cron;

use Codeal\Weather\Api\WeatherApiConnectorManagementInterface;
use Codeal\Weather\Api\WeatherManagementInterface;
use Codeal\Weather\Exceptions\ApiConnectorException;
use Codeal\Weather\Exceptions\WeatherDataException;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;

class WeatherFetcher implements CronJobInterface
{
    /**
     * @var WeatherApiConnectorManagementInterface
     */
    private $apiConnector;
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var WeatherManagementInterface
     */
    private $weatherService;

    public function __construct(
        WeatherApiConnectorManagementInterface $apiConnector,
        WeatherManagementInterface $weatherService,
        LoggerInterface $logger
    ) {
        $this->apiConnector = $apiConnector;
        $this->logger = $logger;
        $this->weatherService = $weatherService;
    }

    public function execute(): void
    {
        try {
            $data = $this->apiConnector->getWeatherData();
        } catch (ApiConnectorException $e) {
            $this->logger->error($e->getMessage());
        }

        if (!empty($data)) {
            try {
                if (!$this->weatherService->saveFetchedData($data)) {
                    $this->logger->warning(__('Can\'t save weather data'), ['data' => $data]);
                }
            } catch (WeatherDataException $e) {
                $this->logger->error($e->getMessage());
            }
        }
    }
}
