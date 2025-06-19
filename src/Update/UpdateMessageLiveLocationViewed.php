<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A message with a live location was viewed. When the update is received, the application is expected to update the live location.
 */
class UpdateMessageLiveLocationViewed extends Update
{
    public const TYPE_NAME = 'updateMessageLiveLocationViewed';

    public function __construct(
        /**
         * Identifier of the chat with the live location message.
         */
        protected int $chatId,
        /**
         * Identifier of the message with live location.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageLiveLocationViewed
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
