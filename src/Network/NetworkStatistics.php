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
    public const string TYPE_NAME = 'networkStatistics';

    public function __construct(
        /**
         * Network statistics entries.
         *
         * @var NetworkStatisticsEntry[]
         */
        protected array $entries,
        /**
         * Point in time (Unix timestamp) from which the statistics are collected.
         */
        protected int   $sinceDate,
    ) {}

    public static function fromArray(array $array): NetworkStatistics
    {
        return new static(
            entries  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['entries']),
            sinceDate: $array['since_date'],
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

    public function setEntries(array $value): static
    {
        $this->entries = $value;

        return $this;
    }

    public function setSinceDate(int $value): static
    {
        $this->sinceDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'entries'    => array_map(static fn($x) => $x->jsonSerialize(), $this->entries),
            'since_date' => $this->sinceDate,
        ];
    }
}
