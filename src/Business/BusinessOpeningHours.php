<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes opening hours of a business.
 */
class BusinessOpeningHours extends TdObject
{
    public const TYPE_NAME = 'businessOpeningHours';

    public function __construct(
        /**
         * Unique time zone identifier.
         */
        protected string $timeZoneId,
        /**
         * Intervals of the time when the business is open.
         *
         * @var BusinessOpeningHoursInterval[]
         */
        protected array  $openingHours
    ) {}

    public static function fromArray(array $array): BusinessOpeningHours
    {
        return new static(
            $array['time_zone_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['opening_hours']),
        );
    }

    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }

    public function getTimeZoneId(): string
    {
        return $this->timeZoneId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'time_zone_id' => $this->timeZoneId,
            array_map(static fn($x) => $x->typeSerialize(), $this->openingHours),
        ];
    }
}
