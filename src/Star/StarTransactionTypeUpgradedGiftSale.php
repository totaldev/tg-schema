<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a sale of an upgraded gift; for regular users only.
 */
class StarTransactionTypeUpgradedGiftSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeUpgradedGiftSale';

    public function __construct(
        /**
         * Identifier of the user that bought the gift.
         */
        protected int          $userId,
        /**
         * The gift.
         */
        protected UpgradedGift $gift,
        /**
         * The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars received by the seller of the gift.
         */
        protected int          $commissionPerMille,
        /**
         * The amount of Telegram Stars that were received by Telegram; can be negative for refunds.
         */
        protected StarAmount   $commissionStarAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeUpgradedGiftSale
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['gift']),
            $array['commission_per_mille'],
            TdSchemaRegistry::fromArray($array['commission_star_amount']),
        );
    }

    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    public function getCommissionStarAmount(): StarAmount
    {
        return $this->commissionStarAmount;
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
            '@type'                  => static::TYPE_NAME,
            'user_id'                => $this->userId,
            'gift'                   => $this->gift->typeSerialize(),
            'commission_per_mille'   => $this->commissionPerMille,
            'commission_star_amount' => $this->commissionStarAmount->typeSerialize(),
        ];
    }
}
