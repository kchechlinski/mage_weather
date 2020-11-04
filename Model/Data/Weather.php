<?php declare(strict_types=1);

namespace Codeal\Weather\Model\Data;

use Codeal\Weather\Api\Data\WeatherInterface;

class Weather extends \Magento\Framework\Api\AbstractExtensibleObject implements WeatherInterface
{

    /**
     * {@inheritDoc}
     */
    public function getWeatherId(): ?string
    {
        return $this->_get(self::WEATHER_ID);
    }

    /**
     * {@inheritDoc}
     */
    public function setWeatherId(string $weatherId): WeatherInterface
    {
        return $this->setData(self::WEATHER_ID, $weatherId);
    }


    /**
     * {@inheritDoc}
     */
    public function getTemperature(): ?float
    {
        return $this->_get(self::TEMPERATURE);
    }

    /**
     * {@inheritDoc}
     */
    public function setTemperature(float $temperature): WeatherInterface
    {
        return $this->setData(self::TEMPERATURE, $temperature);
    }

    /**
     * {@inheritDoc}
     */
    public function getWindSpeed(): ?float
    {
        return $this->_get(self::WIND_SPEED);
    }

    /**
     * {@inheritDoc}
     */
    public function setWindSpeed(float $windSpeed): WeatherInterface
    {
        return $this->setData(self::WIND_SPEED, $windSpeed);
    }

    /**
     * {@inheritDoc}
     */
    public function getWindDirection(): ?int
    {
        return $this->_get(self::WIND_DIRECTION);
    }

    /**
     * {@inheritDoc}
     */
    public function setWindDirection(int $windDirection): WeatherInterface
    {
        return $this->setData(self::WIND_DIRECTION, $windDirection);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibility(): ?int
    {
        return $this->_get(self::VISIBILITY);
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibility(int $visibility): WeatherInterface
    {
        return $this->setData(self::VISIBILITY, $visibility);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {
        return $this->_get(self::DESCRIPTION);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): WeatherInterface
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcon(): ?string
    {
        return $this->_get(self::ICON);
    }

    /**
     * {@inheritDoc}
     */
    public function setIcon(string $icon): WeatherInterface
    {
        return $this->setData(self::ICON, $icon);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationTime(): ?string
    {
        return $this->_get(self::CREATION_TIME);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationTime(string $creationTime): WeatherInterface
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Codeal\Weather\Api\Data\WeatherExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Codeal\Weather\Api\Data\WeatherExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Codeal\Weather\Api\Data\WeatherExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
