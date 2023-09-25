<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about found messages sent on a specific day
 */
class MessageCalendarDay extends TdObject
{
    public const TYPE_NAME = 'messageCalendarDay';

    /**
     * First message sent on the day
     *
     * @var Message
     */
    protected Message $message;

    /**
     * Total number of found messages sent on the day
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(int $totalCount, Message $message)
    {
        $this->totalCount = $totalCount;
        $this->message = $message;
    }

    public static function fromArray(array $array): MessageCalendarDay
    {
        return new static(
            $array['total_count'],
            TdSchemaRegistry::fromArray($array['message']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'message' => $this->message->typeSerialize(),
        ];
    }
}
