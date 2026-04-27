<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about found messages, split by days according to the option "utc_time_offset".
 */
class MessageCalendar extends TdObject
{
    public const string TYPE_NAME = 'messageCalendar';

    public function __construct(
        /**
         * Information about messages sent.
         *
         * @var MessageCalendarDay[]
         */
        protected array $days,
        /**
         * Total number of found messages.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): MessageCalendar
    {
        return new static(
            days      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['days']),
            totalCount: $array['total_count'],
        );
    }

    public function getDays(): array
    {
        return $this->days;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setDays(array $value): static
    {
        $this->days = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'days'        => array_map(static fn($x) => $x->jsonSerialize(), $this->days),
            'total_count' => $this->totalCount,
        ];
    }
}
