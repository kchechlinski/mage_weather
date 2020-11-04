<?php declare(strict_types=1);

namespace Codeal\Weather\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface WeatherInterface extends ExtensibleDataInterface
{

    public const WEATHER_ID = 'weather_id';
    public const TEMPERATURE = 'temperature';
    public const WIND_SPEED = 'wind_speed';
    public const WIND_DIRECTION = 'wind_direction';
    public const VISIBILITY = 'visibility';
    public const DESCRIPTION = 'description';
    public const ICON = 'icon';
    public const CREATION_TIME = 'creation_time';

    /**
     * Get weather_id
     * @return string|null
     */
    public function getWeatherId(): ?string;

    /**
     * Set weather_id
     * @param string $weatherId
     * @return WeatherInterface
     */
    public function setWeatherId(string $weatherId): WeatherInterface;

    /**
     * @return float|null
     */
    public function getTemperature(): ?float;

    /**
     * @param float $temperature
     * @return WeatherInterface
     */
    public function setTemperature(float $temperature): WeatherInterface;

    /**
     * @return float|null
     */
    public function getWindSpeed(): ?float;

    /**
     * @param float $windSpeed
     * @return WeatherInterface
     */
    public function setWindSpeed(float $windSpeed): WeatherInterface;

    /**
     * @return int|null
     */
    public function getWindDirection(): ?int;

    /**
     * @param int $windDirection
     * @return WeatherInterface
     */
    public function setWindDirection(int $windDirection): WeatherInterface;

    /**
     * @return int|null
     */
    public function getVisibility(): ?int;

    /**
     * @param int $visibility
     * @return WeatherInterface
     */
    public function setVisibility(int $visibility): WeatherInterface;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string $description
     * @return WeatherInterface
     */
    public function setDescription(string $description): WeatherInterface;

    /**
     * @return string|null
     */
    public function getIcon(): ?string;

    /**
     * @param string $icon
     * @return WeatherInterface
     */
    public function setIcon(string $icon): WeatherInterface;

    /**
     * @return string|null
     */
    public function getCreationTime(): ?string;

    /**
     * @param string $creationTime
     * @return WeatherInterface
     */
    public function setCreationTime(string $creationTime): WeatherInterface;

}
