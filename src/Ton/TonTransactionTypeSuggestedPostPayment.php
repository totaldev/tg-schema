<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

/**
 * The transaction is a payment for a suggested post.
 */
class TonTransactionTypeSuggestedPostPayment extends TonTransactionType
{
    public const TYPE_NAME = 'tonTransactionTypeSuggestedPostPayment';

    public function __construct(
        /**
         * Identifier of the channel chat that posted the post.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeSuggestedPostPayment
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
