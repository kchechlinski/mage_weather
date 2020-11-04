<?php declare(strict_types=1);

namespace Codeal\Weather\Model\Weather\Parser;

/**
 * Class OpenWeatherFetchedDataParser
 * @package Codeal\Weather\Model\Weather\Parser
 */
class OpenWeatherFetchedDataParser implements FetchedDataParserInterface
{
    /**
     * @inheritDoc
     */
    public function parse(string $data): array
    {
        $dataObject = json_decode($data);

        $result = [
            'temperature' => $dataObject->main->temp,
            'wind_speed' => $dataObject->wind->speed,
            'wind_direction' => $dataObject->wind->deg,
            'visibility' => $dataObject->visibility,
            'description' => '',
            'icon' => ''
        ];

        $weatherDescriptionObject = array_shift($dataObject->weather);
        if (isset($weatherDescriptionObject)) {
            $result['description'] = $weatherDescriptionObject->description;
            $result['icon'] = $weatherDescriptionObject->icon;
        }


        return $result;
    }
}
