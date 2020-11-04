<?php declare(strict_types=1);

namespace Codeal\Weather\Api;

use Codeal\Weather\Api\Data\WeatherInterface;
use Codeal\Weather\Api\Data\WeatherSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface WeatherRepositoryInterface
{

    /**
     * Save Weather
     * @param WeatherInterface $weather
     * @return WeatherInterface
     * @throws LocalizedException
     */
    public function save(
        WeatherInterface $weather
    );

    /**
     * Retrieve Weather
     * @param string $weatherId
     * @return WeatherInterface
     * @throws LocalizedException
     */
    public function get($weatherId);

    /**
     * Retrieve Weather matching the specified criteria.
     * @param SearchCriteriaInterface $searchCriteria
     * @return WeatherSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Weather
     * @param WeatherInterface $weather
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        WeatherInterface $weather
    );

    /**
     * Delete Weather by ID
     * @param string $weatherId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($weatherId);

    /**
     * @return mixed
     */
    public function getLast();
}
