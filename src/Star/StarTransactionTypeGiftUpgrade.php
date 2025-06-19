<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is an upgrade of a gift; for regular users only.
 */
class StarTransactionTypeGiftUpgrade extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeGiftUpgrade';

    public function __construct(
        /**
         * Identifier of the user that initially sent the gift.
         */
        protected int          $userId,
        /**
         * The upgraded gift.
         */
        protected UpgradedGift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftUpgrade
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['gift']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'gift'    => $this->gift->typeSerialize(),
        ];
    }
}
