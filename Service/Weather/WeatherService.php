<?php declare(strict_types=1);

namespace Codeal\Weather\Service\Weather;

use Codeal\Weather\Api\Data\WeatherInterface;
use Codeal\Weather\Api\Data\WeatherInterfaceFactory;
use Codeal\Weather\Api\WeatherRepositoryInterface;
use Codeal\Weather\Model\Weather;
use Codeal\Weather\Model\Weather\Parser\FetchedDataParserInterface;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class WeatherService
 * @package Codeal\Weather\Service\Weather
 */
class WeatherService implements \Codeal\Weather\Api\WeatherManagementInterface
{
    /**
     * @var FetchedDataParserInterface
     */
    private $dataParser;
    /**
     * @var WeatherInterfaceFactory
     */
    private $weatherFactory;
    /**
     * @var WeatherRepositoryInterface
     */
    private $repository;
    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    public function __construct(
        FetchedDataParserInterface $dataParser,
        WeatherInterfaceFactory $weatherFactory,
        WeatherRepositoryInterface $repository,
        DataObjectHelper $dataObjectHelper
    ) {
        $this->dataParser = $dataParser;
        $this->weatherFactory = $weatherFactory;
        $this->repository = $repository;
        $this->dataObjectHelper = $dataObjectHelper;
    }

    /**
     * {@inheritDoc}
     */
    public function saveFetchedData(string $data): bool
    {
        $parsedData = $this->dataParser->parse($data);

        /** @var WeatherInterface $weather */
        $weather = $this->weatherFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $weather,
            $parsedData,
            WeatherInterface::class
        );

        try {
            $this->repository->save($weather);
            return true;
        } catch (LocalizedException $e) {
            return false;
        }
    }


    /**
     * {@inheritDoc}
     */
    public function getCurrentWeather(): ?WeatherInterface
    {
        /** @var Weather $currentWeather */
        $currentWeather = $this->repository->getLast();
        return $currentWeather->getDataModel();
    }
}
