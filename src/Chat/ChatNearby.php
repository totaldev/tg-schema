<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a chat located nearby.
 */
class ChatNearby extends TdObject
{
    public const TYPE_NAME = 'chatNearby';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Distance to the chat location, in meters.
         */
        protected int $distance,
    ) {}

    public static function fromArray(array $array): ChatNearby
    {
        return new static(
            $array['chat_id'],
            $array['distance'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'distance' => $this->distance,
        ];
    }
}
