<?php declare(strict_types=1);

namespace Codeal\Weather\Model;

use Codeal\Weather\Api\Data\WeatherInterface;
use Codeal\Weather\Api\Data\WeatherInterfaceFactory;
use Codeal\Weather\Model\ResourceModel\Weather\Collection;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;

/**
 * Class Weather
 * @package Codeal\Weather\Model
 */
class Weather extends \Magento\Framework\Model\AbstractModel
{

    protected $weatherDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = 'codeal_weather_weather';

    /**
     * @param Context $context
     * @param Registry $registry
     * @param WeatherInterfaceFactory $weatherDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param ResourceModel\Weather $resource
     * @param Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        WeatherInterfaceFactory $weatherDataFactory,
        DataObjectHelper $dataObjectHelper,
        ResourceModel\Weather $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->weatherDataFactory = $weatherDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve weather model with weather data
     * @return WeatherInterface
     */
    public function getDataModel()
    {
        $weatherData = $this->getData();

        $weatherDataObject = $this->weatherDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $weatherDataObject,
            $weatherData,
            WeatherInterface::class
        );

        return $weatherDataObject;
    }
}
