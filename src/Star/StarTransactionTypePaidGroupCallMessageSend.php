<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a sending of a paid group call message; relevant for regular users only.
 */
class StarTransactionTypePaidGroupCallMessageSend extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypePaidGroupCallMessageSend';

    public function __construct(
        /**
         * Identifier of the chat that received the payment.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePaidGroupCallMessageSend
    {
        return new static(
            chatId: $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
