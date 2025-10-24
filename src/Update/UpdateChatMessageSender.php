<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message sender that is selected to send messages in a chat has changed.
 */
class UpdateChatMessageSender extends Update
{
    public const string TYPE_NAME = 'updateChatMessageSender';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int            $chatId,
        /**
         * New value of message_sender_id; may be null if the user can't change message sender.
         */
        protected ?MessageSender $messageSenderId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatMessageSender
    {
        return new static(
            $array['chat_id'],
            isset($array['message_sender_id']) ? TdSchemaRegistry::fromArray($array['message_sender_id']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageSenderId(): ?MessageSender
    {
        return $this->messageSenderId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageSenderId(?MessageSender $value): static
    {
        $this->messageSenderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_sender_id' => $this->messageSenderId ?? null,
        ];
    }
}
