<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of an upgrade of a gift owned by another user or channel; for regular users only.
 */
class StarTransactionTypeGiftUpgradePurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiftUpgradePurchase';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift          $gift,
        /**
         * Owner of the upgraded gift.
         */
        protected MessageSender $ownerId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftUpgradePurchase
    {
        return new static(
            gift   : TdSchemaRegistry::fromArray($array['gift']),
            ownerId: TdSchemaRegistry::fromArray($array['owner_id']),
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

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'gift'     => $this->gift->jsonSerialize(),
            'owner_id' => $this->ownerId->jsonSerialize(),
        ];
    }
}
