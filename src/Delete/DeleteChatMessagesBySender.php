<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deletes all messages sent by the specified message sender in a chat. Supported only for supergroups; requires can_delete_messages administrator right.
 */
class DeleteChatMessagesBySender extends TdFunction
{
    public const TYPE_NAME = 'deleteChatMessagesBySender';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Identifier of the sender of messages to delete.
         */
        protected MessageSender $senderId
    ) {}

    public static function fromArray(array $array): DeleteChatMessagesBySender
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'sender_id' => $this->senderId->typeSerialize(),
        ];
    }
}
