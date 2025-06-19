<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of a regular gift; for regular users and bots only.
 */
class StarTransactionTypeGiftPurchase extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeGiftPurchase';

    public function __construct(
        /**
         * Identifier of the user or the channel that received the gift.
         */
        protected MessageSender $ownerId,
        /**
         * The gift.
         */
        protected Gift          $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftPurchase
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'owner_id' => $this->ownerId->typeSerialize(),
            'gift'     => $this->gift->typeSerialize(),
        ];
    }
}
