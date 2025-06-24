<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A full list of available network statistic entries.
 */
class NetworkStatistics extends TdObject
{
    public const TYPE_NAME = 'networkStatistics';

    public function __construct(
        /**
         * Point in time (Unix timestamp) from which the statistics are collected.
         */
        protected int   $sinceDate,
        /**
         * Network statistics entries.
         *
         * @var NetworkStatisticsEntry[]
         */
        protected array $entries
    ) {}

    public static function fromArray(array $array): NetworkStatistics
    {
        return new static(
            $array['since_date'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['entries']),
        );
    }

    public function getEntries(): array
    {
        return $this->entries;
    }

    public function getSinceDate(): int
    {
        return $this->sinceDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'since_date' => $this->sinceDate,
            array_map(static fn($x) => $x->typeSerialize(), $this->entries),
        ];
    }
}
