<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a receiving of a payment for a suggested post by the channel chat; for channel chats only.
 */
class StarTransactionTypeSuggestedPostPaymentReceive extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeSuggestedPostPaymentReceive';

    public function __construct(
        /**
         * Identifier of the user that paid for the suggested post.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeSuggestedPostPaymentReceive
    {
        return new static(
            $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
