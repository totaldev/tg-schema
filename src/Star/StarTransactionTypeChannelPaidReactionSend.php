<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a sending of a paid reaction to a message in a channel chat by the current user; for regular users only.
 */
class StarTransactionTypeChannelPaidReactionSend extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeChannelPaidReactionSend';

    public function __construct(
        /**
         * Identifier of the channel chat.
         */
        protected int $chatId,
        /**
         * Identifier of the reacted message; can be 0 or an identifier of a deleted message.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidReactionSend
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
