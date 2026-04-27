<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a purchase of an upgraded gift for some user or channel; relevant for regular users only.
 */
class StarTransactionTypeUpgradedGiftPurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeUpgradedGiftPurchase';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift $gift,
        /**
         * Identifier of the user who sold the gift.
         */
        protected int          $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeUpgradedGiftPurchase
    {
        return new static(
            gift  : TdSchemaRegistry::fromArray($array['gift']),
            userId: $array['user_id'],
        );
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setGift(UpgradedGift $value): static
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
