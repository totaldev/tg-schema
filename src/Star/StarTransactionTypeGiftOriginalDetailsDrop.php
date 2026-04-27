<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a drop of original details of an upgraded gift; relevant for regular users only.
 */
class StarTransactionTypeGiftOriginalDetailsDrop extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiftOriginalDetailsDrop';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift  $gift,
        /**
         * Identifier of the user or the channel that owns the gift.
         */
        protected MessageSender $ownerId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftOriginalDetailsDrop
    {
        return new static(
            gift   : TdSchemaRegistry::fromArray($array['gift']),
            ownerId: TdSchemaRegistry::fromArray($array['owner_id']),
        );
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function setGift(UpgradedGift $value): static
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
