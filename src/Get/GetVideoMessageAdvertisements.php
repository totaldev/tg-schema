<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns advertisements to be shown while a video from a message is watched. Available only if messageProperties.can_get_video_advertisements.
 */
class GetVideoMessageAdvertisements extends TdFunction
{
    public const TYPE_NAME = 'getVideoMessageAdvertisements';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): GetVideoMessageAdvertisements
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
