<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgrade;

use Totaldev\TgSchema\TdFunction;

/**
 * Upgrades a regular gift.
 */
class UpgradeGift extends TdFunction
{
    public const TYPE_NAME = 'upgradeGift';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string $businessConnectionId,
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId,
        /**
         * Pass true to keep the original gift text, sender and receiver in the upgraded gift.
         */
        protected bool   $keepOriginalDetails,
        /**
         * The amount of Telegram Stars required to pay for the upgrade. It the gift has prepaid_upgrade_star_count > 0, then pass 0, otherwise, pass gift.upgrade_star_count.
         */
        protected int    $starCount,
    ) {}

    public static function fromArray(array $array): UpgradeGift
    {
        return new static(
            $array['business_connection_id'],
            $array['received_gift_id'],
            $array['keep_original_details'],
            $array['star_count'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getKeepOriginalDetails(): bool
    {
        return $this->keepOriginalDetails;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'received_gift_id'       => $this->receivedGiftId,
            'keep_original_details'  => $this->keepOriginalDetails,
            'star_count'             => $this->starCount,
        ];
    }
}
