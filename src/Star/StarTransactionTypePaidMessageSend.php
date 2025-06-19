<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a sending of a paid message; for regular users only.
 */
class StarTransactionTypePaidMessageSend extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypePaidMessageSend';

    public function __construct(
        /**
         * Identifier of the chat that received the payment.
         */
        protected int $chatId,
        /**
         * Number of sent paid messages.
         */
        protected int $messageCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePaidMessageSend
    {
        return new static(
            $array['chat_id'],
            $array['message_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'message_count' => $this->messageCount,
        ];
    }
}
