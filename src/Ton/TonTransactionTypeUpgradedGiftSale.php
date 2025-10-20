<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a sale of an upgraded gift; for regular users only.
 */
class TonTransactionTypeUpgradedGiftSale extends TonTransactionType
{
    public const TYPE_NAME = 'tonTransactionTypeUpgradedGiftSale';

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
         * The number of Toncoins received by the Telegram for each 1000 Toncoins received by the seller of the gift.
         */
        protected int          $commissionPerMille,
        /**
         * The amount of Toncoins that were received by the Telegram; in the smallest units of the currency.
         */
        protected int          $commissionToncoinAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeUpgradedGiftSale
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['gift']),
            $array['commission_per_mille'],
            $array['commission_toncoin_amount'],
        );
    }

    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    public function getCommissionToncoinAmount(): int
    {
        return $this->commissionToncoinAmount;
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
            '@type'                     => static::TYPE_NAME,
            'user_id'                   => $this->userId,
            'gift'                      => $this->gift->typeSerialize(),
            'commission_per_mille'      => $this->commissionPerMille,
            'commission_toncoin_amount' => $this->commissionToncoinAmount,
        ];
    }
}
