<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The date and time must be shown as absolute timestamps.
 */
class DateTimeFormattingTypeAbsolute extends DateTimeFormattingType
{
    public const string TYPE_NAME = 'dateTimeFormattingTypeAbsolute';

    public function __construct(
        /**
         * The precision with which the date is shown.
         */
        protected DateTimePartPrecision $datePrecision,
        /**
         * True, if the day of week must be shown.
         */
        protected bool                  $showDayOfWeek,
        /**
         * The precision with which hours, minutes and seconds are shown.
         */
        protected DateTimePartPrecision $timePrecision,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DateTimeFormattingTypeAbsolute
    {
        return new static(
            datePrecision: TdSchemaRegistry::fromArray($array['date_precision']),
            showDayOfWeek: $array['show_day_of_week'],
            timePrecision: TdSchemaRegistry::fromArray($array['time_precision']),
        );
    }

    public function getDatePrecision(): DateTimePartPrecision
    {
        return $this->datePrecision;
    }

    public function getShowDayOfWeek(): bool
    {
        return $this->showDayOfWeek;
    }

    public function getTimePrecision(): DateTimePartPrecision
    {
        return $this->timePrecision;
    }

    public function setDatePrecision(DateTimePartPrecision $value): static
    {
        $this->datePrecision = $value;

        return $this;
    }

    public function setShowDayOfWeek(bool $value): static
    {
        $this->showDayOfWeek = $value;

        return $this;
    }

    public function setTimePrecision(DateTimePartPrecision $value): static
    {
        $this->timePrecision = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'date_precision'   => $this->datePrecision->jsonSerialize(),
            'show_day_of_week' => $this->showDayOfWeek,
            'time_precision'   => $this->timePrecision->jsonSerialize(),
        ];
    }
}
