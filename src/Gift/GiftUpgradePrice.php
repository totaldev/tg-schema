<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a price required to pay to upgrade a gift.
 */
class GiftUpgradePrice extends TdObject
{
    public const string TYPE_NAME = 'giftUpgradePrice';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the price will be in effect.
         */
        protected int $date,
        /**
         * The amount of Telegram Stars required to pay to upgrade the gift.
         */
        protected int $starCount,
    ) {}

    public static function fromArray(array $array): GiftUpgradePrice
    {
        return new static(
            $array['date'],
            $array['star_count'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'date'       => $this->date,
            'star_count' => $this->starCount,
        ];
    }
}
