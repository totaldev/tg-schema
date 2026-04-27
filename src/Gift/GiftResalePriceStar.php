<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * Describes price of a resold gift in Telegram Stars.
 */
class GiftResalePriceStar extends GiftResalePrice
{
    public const string TYPE_NAME = 'giftResalePriceStar';

    public function __construct(
        /**
         * The amount of Telegram Stars expected to be paid for the gift. Must be in range getOption("gift_resale_star_count_min")-getOption("gift_resale_star_count_max") for gifts put for resale.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftResalePriceStar
    {
        return new static(
            starCount: $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
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
            'star_count' => $this->starCount,
        ];
    }
}
