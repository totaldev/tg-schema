<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about found messages sent on a specific day.
 */
class MessageCalendarDay extends TdObject
{
    public const string TYPE_NAME = 'messageCalendarDay';

    public function __construct(
        /**
         * First message sent on the day.
         */
        protected Message $message,
        /**
         * Total number of found messages sent on the day.
         */
        protected int     $totalCount,
    ) {}

    public static function fromArray(array $array): MessageCalendarDay
    {
        return new static(
            message   : TdSchemaRegistry::fromArray($array['message']),
            totalCount: $array['total_count'],
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setMessage(Message $value): static
    {
        $this->message = $value;

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
            'message'     => $this->message->jsonSerialize(),
            'total_count' => $this->totalCount,
        ];
    }
}
