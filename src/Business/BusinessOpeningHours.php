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
    public const string TYPE_NAME = 'businessOpeningHours';

    public function __construct(
        /**
         * Intervals of the time when the business is open.
         *
         * @var BusinessOpeningHoursInterval[]
         */
        protected array  $openingHours,
        /**
         * Unique time zone identifier.
         */
        protected string $timeZoneId,
    ) {}

    public static function fromArray(array $array): BusinessOpeningHours
    {
        return new static(
            openingHours: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['opening_hours']),
            timeZoneId  : $array['time_zone_id'],
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

    public function setOpeningHours(array $value): static
    {
        $this->openingHours = $value;

        return $this;
    }

    public function setTimeZoneId(string $value): static
    {
        $this->timeZoneId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'opening_hours' => array_map(static fn($x) => $x->jsonSerialize(), $this->openingHours),
            'time_zone_id'  => $this->timeZoneId,
        ];
    }
}
