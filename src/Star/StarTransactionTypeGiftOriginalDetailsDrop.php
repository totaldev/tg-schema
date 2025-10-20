<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a drop of original details of an upgraded gift; for regular users only.
 */
class StarTransactionTypeGiftOriginalDetailsDrop extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeGiftOriginalDetailsDrop';

    public function __construct(
        /**
         * Identifier of the user or the channel that owns the gift.
         */
        protected MessageSender $ownerId,
        /**
         * The gift.
         */
        protected UpgradedGift  $gift,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftOriginalDetailsDrop
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            TdSchemaRegistry::fromArray($array['gift']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'owner_id' => $this->ownerId->typeSerialize(),
            'gift'     => $this->gift->typeSerialize(),
        ];
    }
}
