<?php declare(strict_types=1);

namespace Codeal\Weather\ViewModel;

use Codeal\Weather\Api\Data\WeatherInterface;
use Codeal\Weather\Api\WeatherManagementInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class WeatherViewModel
 * @package Codeal\Weather\ViewModel
 */
class WeatherViewModel implements ArgumentInterface
{
    /**
     * @var WeatherManagementInterface
     */
    private $weatherService;

    public function __construct(WeatherManagementInterface $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getWeather(): ?WeatherInterface
    {
        return $this->weatherService->getCurrentWeather();
    }
}
