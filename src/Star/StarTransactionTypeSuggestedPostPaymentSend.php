<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a payment for a suggested post; relevant for regular users only.
 */
class StarTransactionTypeSuggestedPostPaymentSend extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeSuggestedPostPaymentSend';

    public function __construct(
        /**
         * Identifier of the channel chat that posted the post.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeSuggestedPostPaymentSend
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
