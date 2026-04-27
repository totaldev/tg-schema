<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a sale of an upgraded gift.
 */
class TonTransactionTypeUpgradedGiftSale extends TonTransactionType
{
    public const string TYPE_NAME = 'tonTransactionTypeUpgradedGiftSale';

    public function __construct(
        /**
         * The number of Toncoins received by the Telegram for each 1000 Toncoins received by the seller of the gift.
         */
        protected int          $commissionPerMille,
        /**
         * The Toncoin amount that was received by the Telegram; in the smallest units of the currency.
         */
        protected int          $commissionToncoinAmount,
        /**
         * The gift.
         */
        protected UpgradedGift $gift,
        /**
         * Identifier of the user who bought the gift.
         */
        protected int          $userId,
        /**
         * True, if the gift was sold through a purchase offer.
         */
        protected bool         $viaOffer,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeUpgradedGiftSale
    {
        return new static(
            commissionPerMille     : $array['commission_per_mille'],
            commissionToncoinAmount: $array['commission_toncoin_amount'],
            gift                   : TdSchemaRegistry::fromArray($array['gift']),
            userId                 : $array['user_id'],
            viaOffer               : $array['via_offer'],
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

    public function getViaOffer(): bool
    {
        return $this->viaOffer;
    }

    public function setCommissionPerMille(int $value): static
    {
        $this->commissionPerMille = $value;

        return $this;
    }

    public function setCommissionToncoinAmount(int $value): static
    {
        $this->commissionToncoinAmount = $value;

        return $this;
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

    public function setViaOffer(bool $value): static
    {
        $this->viaOffer = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'commission_per_mille'      => $this->commissionPerMille,
            'commission_toncoin_amount' => $this->commissionToncoinAmount,
            'gift'                      => $this->gift->jsonSerialize(),
            'user_id'                   => $this->userId,
            'via_offer'                 => $this->viaOffer,
        ];
    }
}
