<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is an upgrade of a gift; relevant for regular users only.
 */
class StarTransactionTypeGiftUpgrade extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiftUpgrade';

    public function __construct(
        /**
         * The upgraded gift.
         */
        protected UpgradedGift $gift,
        /**
         * Identifier of the user who initially sent the gift.
         */
        protected int          $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftUpgrade
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
