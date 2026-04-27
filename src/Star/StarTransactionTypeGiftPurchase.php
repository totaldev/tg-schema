<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of a regular gift; relevant for regular users and bots only.
 */
class StarTransactionTypeGiftPurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiftPurchase';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift          $gift,
        /**
         * Identifier of the user or the channel that received the gift.
         */
        protected MessageSender $ownerId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftPurchase
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
