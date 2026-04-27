<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a sending of a paid reaction to a message in a channel chat by the current user; relevant for regular users only.
 */
class StarTransactionTypeChannelPaidReactionSend extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeChannelPaidReactionSend';

    public function __construct(
        /**
         * Identifier of the channel chat.
         */
        protected int $chatId,
        /**
         * Identifier of the reacted message; may be 0 or an identifier of a deleted message.
         */
        protected int $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidReactionSend
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
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
