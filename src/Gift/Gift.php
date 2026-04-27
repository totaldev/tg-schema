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
    public const string TYPE_NAME = 'gift';

    public function __construct(
        /**
         * Information about the auction on which the gift can be purchased; may be null if the gift can be purchased directly.
         */
        protected ?GiftAuction        $auctionInfo,
        /**
         * Background of the gift.
         */
        protected GiftBackground      $background,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift by default. If the gift was paid with just bought Telegram Stars, then full value can be claimed.
         */
        protected int                 $defaultSellStarCount,
        /**
         * Point in time (Unix timestamp) when the gift was send for the first time; for sold out gifts only.
         */
        protected int                 $firstSendDate,
        /**
         * True, if the gift can be used to customize the user's name, and backgrounds of profile photo, reply header, and link preview.
         */
        protected bool                $hasColors,
        /**
         * Unique identifier of the gift.
         */
        protected int                 $id,
        /**
         * True, if the gift is a birthday gift.
         */
        protected bool                $isForBirthday,
        /**
         * True, if the gift can be bought only by Telegram Premium subscribers.
         */
        protected bool                $isPremium,
        /**
         * Point in time (Unix timestamp) when the gift was send for the last time; for sold out gifts only.
         */
        protected int                 $lastSendDate,
        /**
         * Point in time (Unix timestamp) when the gift can be sent next time by the current user; may be 0 or a date in the past. If the date is in the future, then call canSendGift to get the reason, why the gift can't be sent now.
         */
        protected int                 $nextSendDate,
        /**
         * Number of times the gift can be purchased all users; may be null if not limited.
         */
        protected ?GiftPurchaseLimits $overallLimits,
        /**
         * Identifier of the chat that published the gift; 0 if none.
         */
        protected int                 $publisherChatId,
        /**
         * Number of Telegram Stars that must be paid for the gift.
         */
        protected int                 $starCount,
        /**
         * The sticker representing the gift.
         */
        protected Sticker             $sticker,
        /**
         * Number of Telegram Stars that must be paid to upgrade the gift; 0 if upgrade isn't possible.
         */
        protected int                 $upgradeStarCount,
        /**
         * Number of unique gift variants that are available for the upgraded gift; 0 if unknown.
         */
        protected int                 $upgradeVariantCount,
        /**
         * Number of times the gift can be purchased by the current user; may be null if not limited.
         */
        protected ?GiftPurchaseLimits $userLimits,
    ) {}

    public static function fromArray(array $array): Gift
    {
        return new static(
            auctionInfo         : (isset($array['auction_info']) ? TdSchemaRegistry::fromArray($array['auction_info']) : null),
            background          : TdSchemaRegistry::fromArray($array['background']),
            defaultSellStarCount: $array['default_sell_star_count'],
            firstSendDate       : $array['first_send_date'],
            hasColors           : $array['has_colors'],
            id                  : $array['id'],
            isForBirthday       : $array['is_for_birthday'],
            isPremium           : $array['is_premium'],
            lastSendDate        : $array['last_send_date'],
            nextSendDate        : $array['next_send_date'],
            overallLimits       : (isset($array['overall_limits']) ? TdSchemaRegistry::fromArray($array['overall_limits']) : null),
            publisherChatId     : $array['publisher_chat_id'],
            starCount           : $array['star_count'],
            sticker             : TdSchemaRegistry::fromArray($array['sticker']),
            upgradeStarCount    : $array['upgrade_star_count'],
            upgradeVariantCount : $array['upgrade_variant_count'],
            userLimits          : (isset($array['user_limits']) ? TdSchemaRegistry::fromArray($array['user_limits']) : null),
        );
    }

    public function getAuctionInfo(): ?GiftAuction
    {
        return $this->auctionInfo;
    }

    public function getBackground(): GiftBackground
    {
        return $this->background;
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

    public function getUpgradeVariantCount(): int
    {
        return $this->upgradeVariantCount;
    }

    public function getUserLimits(): ?GiftPurchaseLimits
    {
        return $this->userLimits;
    }

    public function setAuctionInfo(?GiftAuction $value): static
    {
        $this->auctionInfo = $value;

        return $this;
    }

    public function setBackground(GiftBackground $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setDefaultSellStarCount(int $value): static
    {
        $this->defaultSellStarCount = $value;

        return $this;
    }

    public function setFirstSendDate(int $value): static
    {
        $this->firstSendDate = $value;

        return $this;
    }

    public function setHasColors(bool $value): static
    {
        $this->hasColors = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsForBirthday(bool $value): static
    {
        $this->isForBirthday = $value;

        return $this;
    }

    public function setIsPremium(bool $value): static
    {
        $this->isPremium = $value;

        return $this;
    }

    public function setLastSendDate(int $value): static
    {
        $this->lastSendDate = $value;

        return $this;
    }

    public function setNextSendDate(int $value): static
    {
        $this->nextSendDate = $value;

        return $this;
    }

    public function setOverallLimits(?GiftPurchaseLimits $value): static
    {
        $this->overallLimits = $value;

        return $this;
    }

    public function setPublisherChatId(int $value): static
    {
        $this->publisherChatId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setSticker(Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setUpgradeStarCount(int $value): static
    {
        $this->upgradeStarCount = $value;

        return $this;
    }

    public function setUpgradeVariantCount(int $value): static
    {
        $this->upgradeVariantCount = $value;

        return $this;
    }

    public function setUserLimits(?GiftPurchaseLimits $value): static
    {
        $this->userLimits = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'auction_info'            => (null !== $this->auctionInfo ? $this->auctionInfo->jsonSerialize() : null),
            'background'              => $this->background->jsonSerialize(),
            'default_sell_star_count' => $this->defaultSellStarCount,
            'first_send_date'         => $this->firstSendDate,
            'has_colors'              => $this->hasColors,
            'id'                      => $this->id,
            'is_for_birthday'         => $this->isForBirthday,
            'is_premium'              => $this->isPremium,
            'last_send_date'          => $this->lastSendDate,
            'next_send_date'          => $this->nextSendDate,
            'overall_limits'          => (null !== $this->overallLimits ? $this->overallLimits->jsonSerialize() : null),
            'publisher_chat_id'       => $this->publisherChatId,
            'star_count'              => $this->starCount,
            'sticker'                 => $this->sticker->jsonSerialize(),
            'upgrade_star_count'      => $this->upgradeStarCount,
            'upgrade_variant_count'   => $this->upgradeVariantCount,
            'user_limits'             => (null !== $this->userLimits ? $this->userLimits->jsonSerialize() : null),
        ];
    }
}
