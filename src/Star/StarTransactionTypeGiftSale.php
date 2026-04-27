<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of a received gift; relevant for regular users and channel chats only.
 */
class StarTransactionTypeGiftSale extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiftSale';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift $gift,
        /**
         * Identifier of the user who sent the gift.
         */
        protected int  $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftSale
    {
        return new static(
            gift  : TdSchemaRegistry::fromArray($array['gift']),
            userId: $array['user_id'],
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

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'gift'    => $this->gift->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
