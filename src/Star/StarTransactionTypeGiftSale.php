<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of a received gift; for regular users and channel chats only.
 */
class StarTransactionTypeGiftSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeGiftSale';

    public function __construct(
        /**
         * Identifier of the user that sent the gift.
         */
        protected int  $userId,
        /**
         * The gift.
         */
        protected Gift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftSale
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
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
            'gift'    => $this->gift->typeSerialize(),
        ];
    }
}
