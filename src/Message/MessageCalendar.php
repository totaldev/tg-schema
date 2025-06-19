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
    public const TYPE_NAME = 'messageCalendar';

    public function __construct(
        /**
         * Total number of found messages.
         */
        protected int   $totalCount,
        /**
         * Information about messages sent.
         *
         * @var MessageCalendarDay[]
         */
        protected array $days
    ) {}

    public static function fromArray(array $array): MessageCalendar
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['days']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->days),
        ];
    }
}
