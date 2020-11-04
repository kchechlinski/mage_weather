<?php declare(strict_types=1);

namespace Codeal\Weather\Api;

use Codeal\Weather\Api\Data\WeatherInterface;

interface WeatherManagementInterface
{
    /**
     * @param string $data
     * @return bool
     */
    public function saveFetchedData(string $data): bool;

    /**
     * @return WeatherInterface|null
     */
    public function getCurrentWeather(): ?WeatherInterface;
}
