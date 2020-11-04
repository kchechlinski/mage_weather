<?php declare(strict_types=1);

namespace Codeal\Weather\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface WeatherSearchResultsInterface
 * @package Codeal\Weather\Api\Data
 */
interface WeatherSearchResultsInterface extends SearchResultsInterface
{

    /**
     * Get Weather list.
     * @return WeatherInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param WeatherInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
