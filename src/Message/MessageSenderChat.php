<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was sent on behalf of a chat.
 */
class MessageSenderChat extends MessageSender
{
    public const TYPE_NAME = 'messageSenderChat';

    public function __construct(
        /**
         * Identifier of the chat that sent the message.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSenderChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
