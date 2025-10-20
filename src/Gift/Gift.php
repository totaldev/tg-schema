<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a gift that can be sent to another user or channel chat.
 */
class Gift extends TdObject
{
    public const TYPE_NAME = 'gift';

    public function __construct(
        /**
         * Unique identifier of the gift.
         */
        protected int                 $id,
        /**
         * Identifier of the chat that published the gift; 0 if none.
         */
        protected int                 $publisherChatId,
        /**
         * The sticker representing the gift.
         */
        protected Sticker             $sticker,
        /**
         * Number of Telegram Stars that must be paid for the gift.
         */
        protected int                 $starCount,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift by default. If the gift was paid with just bought Telegram Stars, then full value can be claimed.
         */
        protected int                 $defaultSellStarCount,
        /**
         * Number of Telegram Stars that must be paid to upgrade the gift; 0 if upgrade isn't possible.
         */
        protected int                 $upgradeStarCount,
        /**
         * True, if the gift can be used to customize the user's name, and backgrounds of profile photo, reply header, and link preview.
         */
        protected bool                $hasColors,
        /**
         * True, if the gift is a birthday gift.
         */
        protected bool                $isForBirthday,
        /**
         * True, if the gift can be bought only by Telegram Premium subscribers.
         */
        protected bool                $isPremium,
        /**
         * Point in time (Unix timestamp) when the gift can be sent next time by the current user; can be 0 or a date in the past. If the date is in the future, then call canSendGift to get the reason, why the gift can't be sent now.
         */
        protected int                 $nextSendDate,
        /**
         * Number of times the gift can be purchased by the current user; may be null if not limited.
         */
        protected ?GiftPurchaseLimits $userLimits,
        /**
         * Number of times the gift can be purchased all users; may be null if not limited.
         */
        protected ?GiftPurchaseLimits $overallLimits,
        /**
         * Point in time (Unix timestamp) when the gift was send for the first time; for sold out gifts only.
         */
        protected int                 $firstSendDate,
        /**
         * Point in time (Unix timestamp) when the gift was send for the last time; for sold out gifts only.
         */
        protected int                 $lastSendDate,
    ) {}

    public static function fromArray(array $array): Gift
    {
        return new static(
            $array['id'],
            $array['publisher_chat_id'],
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['star_count'],
            $array['default_sell_star_count'],
            $array['upgrade_star_count'],
            $array['has_colors'],
            $array['is_for_birthday'],
            $array['is_premium'],
            $array['next_send_date'],
            isset($array['user_limits']) ? TdSchemaRegistry::fromArray($array['user_limits']) : null,
            isset($array['overall_limits']) ? TdSchemaRegistry::fromArray($array['overall_limits']) : null,
            $array['first_send_date'],
            $array['last_send_date'],
        );
    }

    public function getDefaultSellStarCount(): int
    {
        return $this->defaultSellStarCount;
    }

    public function getFirstSendDate(): int
    {
        return $this->firstSendDate;
    }

    public function getHasColors(): bool
    {
        return $this->hasColors;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsForBirthday(): bool
    {
        return $this->isForBirthday;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getLastSendDate(): int
    {
        return $this->lastSendDate;
    }

    public function getNextSendDate(): int
    {
        return $this->nextSendDate;
    }

    public function getOverallLimits(): ?GiftPurchaseLimits
    {
        return $this->overallLimits;
    }

    public function getPublisherChatId(): int
    {
        return $this->publisherChatId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function getUpgradeStarCount(): int
    {
        return $this->upgradeStarCount;
    }

    public function getUserLimits(): ?GiftPurchaseLimits
    {
        return $this->userLimits;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'id'                      => $this->id,
            'publisher_chat_id'       => $this->publisherChatId,
            'sticker'                 => $this->sticker->typeSerialize(),
            'star_count'              => $this->starCount,
            'default_sell_star_count' => $this->defaultSellStarCount,
            'upgrade_star_count'      => $this->upgradeStarCount,
            'has_colors'              => $this->hasColors,
            'is_for_birthday'         => $this->isForBirthday,
            'is_premium'              => $this->isPremium,
            'next_send_date'          => $this->nextSendDate,
            'user_limits'             => $this->userLimits ?? null,
            'overall_limits'          => $this->overallLimits ?? null,
            'first_send_date'         => $this->firstSendDate,
            'last_send_date'          => $this->lastSendDate,
        ];
    }
}
