<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Accepted;

use Totaldev\TgSchema\TdObject;

/**
 * Describes gift types that are accepted by a user.
 */
class AcceptedGiftTypes extends TdObject
{
    public const string TYPE_NAME = 'acceptedGiftTypes';

    public function __construct(
        /**
         * True, if limited regular gifts are accepted.
         */
        protected bool $limitedGifts,
        /**
         * True, if Telegram Premium subscription is accepted.
         */
        protected bool $premiumSubscription,
        /**
         * True, if unlimited regular gifts are accepted.
         */
        protected bool $unlimitedGifts,
        /**
         * True, if upgraded gifts and regular gifts that can be upgraded for free are accepted.
         */
        protected bool $upgradedGifts,
    ) {}

    public static function fromArray(array $array): AcceptedGiftTypes
    {
        return new static(
            limitedGifts       : $array['limited_gifts'],
            premiumSubscription: $array['premium_subscription'],
            unlimitedGifts     : $array['unlimited_gifts'],
            upgradedGifts      : $array['upgraded_gifts'],
        );
    }

    public function getLimitedGifts(): bool
    {
        return $this->limitedGifts;
    }

    public function getPremiumSubscription(): bool
    {
        return $this->premiumSubscription;
    }

    public function getUnlimitedGifts(): bool
    {
        return $this->unlimitedGifts;
    }

    public function getUpgradedGifts(): bool
    {
        return $this->upgradedGifts;
    }

    public function setLimitedGifts(bool $value): static
    {
        $this->limitedGifts = $value;

        return $this;
    }

    public function setPremiumSubscription(bool $value): static
    {
        $this->premiumSubscription = $value;

        return $this;
    }

    public function setUnlimitedGifts(bool $value): static
    {
        $this->unlimitedGifts = $value;

        return $this;
    }

    public function setUpgradedGifts(bool $value): static
    {
        $this->upgradedGifts = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'limited_gifts'        => $this->limitedGifts,
            'premium_subscription' => $this->premiumSubscription,
            'unlimited_gifts'      => $this->unlimitedGifts,
            'upgraded_gifts'       => $this->upgradedGifts,
        ];
    }
}
