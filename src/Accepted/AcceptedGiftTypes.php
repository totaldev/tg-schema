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
    public const TYPE_NAME = 'acceptedGiftTypes';

    public function __construct(
        /**
         * True, if unlimited regular gifts are accepted.
         */
        protected bool $unlimitedGifts,
        /**
         * True, if limited regular gifts are accepted.
         */
        protected bool $limitedGifts,
        /**
         * True, if upgraded gifts and regular gifts that can be upgraded for free are accepted.
         */
        protected bool $upgradedGifts,
        /**
         * True, if Telegram Premium subscription is accepted.
         */
        protected bool $premiumSubscription,
    ) {}

    public static function fromArray(array $array): AcceptedGiftTypes
    {
        return new static(
            $array['unlimited_gifts'],
            $array['limited_gifts'],
            $array['upgraded_gifts'],
            $array['premium_subscription'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'unlimited_gifts'      => $this->unlimitedGifts,
            'limited_gifts'        => $this->limitedGifts,
            'upgraded_gifts'       => $this->upgradedGifts,
            'premium_subscription' => $this->premiumSubscription,
        ];
    }
}
