<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Selects a message sender to send messages in a chat.
 */
class SetChatMessageSender extends TdFunction
{
    public const TYPE_NAME = 'setChatMessageSender';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * New message sender for the chat.
         */
        protected MessageSender $messageSenderId
    ) {}

    public static function fromArray(array $array): SetChatMessageSender
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['message_sender_id']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageSenderId(): MessageSender
    {
        return $this->messageSenderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_sender_id' => $this->messageSenderId->typeSerialize(),
        ];
    }
}
