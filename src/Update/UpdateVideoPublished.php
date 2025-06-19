<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * An automatically scheduled message with video has been successfully sent after conversion.
 */
class UpdateVideoPublished extends Update
{
    public const TYPE_NAME = 'updateVideoPublished';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int $chatId,
        /**
         * Identifier of the sent message.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateVideoPublished
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
