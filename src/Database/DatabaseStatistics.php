<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Database;

use Totaldev\TgSchema\TdObject;

/**
 * Contains database statistics.
 */
class DatabaseStatistics extends TdObject
{
    public const TYPE_NAME = 'databaseStatistics';

    public function __construct(
        /**
         * Database statistics in an unspecified human-readable format.
         */
        protected string $statistics
    ) {}

    public static function fromArray(array $array): DatabaseStatistics
    {
        return new static(
            $array['statistics'],
        );
    }

    public function getStatistics(): string
    {
        return $this->statistics;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'statistics' => $this->statistics,
        ];
    }
}
