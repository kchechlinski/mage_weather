<?php declare(strict_types=1);

namespace Codeal\Weather\Model\Weather\Parser;

/**
 * Interface FetchedDataParserInterface
 * @package Codeal\Weather\Model\Weather\Parser
 */
interface FetchedDataParserInterface
{
    /**
     * @param string $data
     * @return array
     */
    public function parse(string $data): array;
}
