<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a message in a specific position
 */
class MessagePosition extends TdObject
{
    public const TYPE_NAME = 'messagePosition';

    /**
     * Point in time (Unix timestamp) when the message was sent
     *
     * @var int
     */
    protected int $date;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * 0-based message position in the full list of suitable messages
     *
     * @var int
     */
    protected int $position;

    public function __construct(int $position, int $messageId, int $date)
    {
        $this->position = $position;
        $this->messageId = $messageId;
        $this->date = $date;
    }

    public static function fromArray(array $array): MessagePosition
    {
        return new static(
            $array['position'],
            $array['message_id'],
            $array['date'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'position' => $this->position,
            'message_id' => $this->messageId,
            'date' => $this->date,
        ];
    }
}
