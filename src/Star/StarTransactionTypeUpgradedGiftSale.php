<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a sale of an upgraded gift; relevant for regular users only.
 */
class StarTransactionTypeUpgradedGiftSale extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeUpgradedGiftSale';

    public function __construct(
        /**
         * The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars received by the seller of the gift.
         */
        protected int          $commissionPerMille,
        /**
         * The Telegram Star amount that was received by Telegram; can be negative for refunds.
         */
        protected StarAmount   $commissionStarAmount,
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

    public static function fromArray(array $array): StarTransactionTypeUpgradedGiftSale
    {
        return new static(
            commissionPerMille  : $array['commission_per_mille'],
            commissionStarAmount: TdSchemaRegistry::fromArray($array['commission_star_amount']),
            gift                : TdSchemaRegistry::fromArray($array['gift']),
            userId              : $array['user_id'],
            viaOffer            : $array['via_offer'],
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

    public function getViaOffer(): bool
    {
        return $this->viaOffer;
    }

    public function setCommissionPerMille(int $value): static
    {
        $this->commissionPerMille = $value;

        return $this;
    }

    public function setCommissionStarAmount(StarAmount $value): static
    {
        $this->commissionStarAmount = $value;

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
            '@type'                  => static::TYPE_NAME,
            'commission_per_mille'   => $this->commissionPerMille,
            'commission_star_amount' => $this->commissionStarAmount->jsonSerialize(),
            'gift'                   => $this->gift->jsonSerialize(),
            'user_id'                => $this->userId,
            'via_offer'              => $this->viaOffer,
        ];
    }
}
