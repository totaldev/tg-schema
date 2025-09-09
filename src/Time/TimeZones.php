<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Time;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of time zones.
 */
class TimeZones extends TdObject
{
    public const TYPE_NAME = 'timeZones';

    public function __construct(
        /**
         * A list of time zones.
         *
         * @var TimeZone[]
         */
        protected array $timeZones
    ) {}

    public static function fromArray(array $array): TimeZones
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['time_zones']),
        );
    }

    public function getTimeZones(): array
    {
        return $this->timeZones;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'time_zones' => array_map(static fn($x) => $x->typeSerialize(), $this->timeZones),
        ];
    }
}
