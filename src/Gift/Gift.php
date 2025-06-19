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
        protected int     $id,
        /**
         * The sticker representing the gift.
         */
        protected Sticker $sticker,
        /**
         * Number of Telegram Stars that must be paid for the gift.
         */
        protected int     $starCount,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift by default. If the gift was paid with just bought Telegram Stars, then full value can be claimed.
         */
        protected int     $defaultSellStarCount,
        /**
         * Number of Telegram Stars that must be paid to upgrade the gift; 0 if upgrade isn't possible.
         */
        protected int     $upgradeStarCount,
        /**
         * True, if the gift is a birthday gift.
         */
        protected bool    $isForBirthday,
        /**
         * Number of remaining times the gift can be purchased; 0 if not limited or the gift was sold out.
         */
        protected int     $remainingCount,
        /**
         * Number of total times the gift can be purchased; 0 if not limited.
         */
        protected int     $totalCount,
        /**
         * Point in time (Unix timestamp) when the gift was send for the first time; for sold out gifts only.
         */
        protected int     $firstSendDate,
        /**
         * Point in time (Unix timestamp) when the gift was send for the last time; for sold out gifts only.
         */
        protected int     $lastSendDate,
    ) {}

    public static function fromArray(array $array): Gift
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['star_count'],
            $array['default_sell_star_count'],
            $array['upgrade_star_count'],
            $array['is_for_birthday'],
            $array['remaining_count'],
            $array['total_count'],
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

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsForBirthday(): bool
    {
        return $this->isForBirthday;
    }

    public function getLastSendDate(): int
    {
        return $this->lastSendDate;
    }

    public function getRemainingCount(): int
    {
        return $this->remainingCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getUpgradeStarCount(): int
    {
        return $this->upgradeStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'id'                      => $this->id,
            'sticker'                 => $this->sticker->typeSerialize(),
            'star_count'              => $this->starCount,
            'default_sell_star_count' => $this->defaultSellStarCount,
            'upgrade_star_count'      => $this->upgradeStarCount,
            'is_for_birthday'         => $this->isForBirthday,
            'remaining_count'         => $this->remainingCount,
            'total_count'             => $this->totalCount,
            'first_send_date'         => $this->firstSendDate,
            'last_send_date'          => $this->lastSendDate,
        ];
    }
}
