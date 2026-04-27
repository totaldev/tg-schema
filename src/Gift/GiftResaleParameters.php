<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes parameters of a unique gift available for resale.
 */
class GiftResaleParameters extends TdObject
{
    public const string TYPE_NAME = 'giftResaleParameters';

    public function __construct(
        /**
         * Resale price of the gift in Telegram Stars.
         */
        protected int  $starCount,
        /**
         * Resale price of the gift in 1/100 of Toncoin.
         */
        protected int  $toncoinCentCount,
        /**
         * True, if the gift can be bought only using Toncoins.
         */
        protected bool $toncoinOnly,
    ) {}

    public static function fromArray(array $array): GiftResaleParameters
    {
        return new static(
            starCount       : $array['star_count'],
            toncoinCentCount: $array['toncoin_cent_count'],
            toncoinOnly     : $array['toncoin_only'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getToncoinCentCount(): int
    {
        return $this->toncoinCentCount;
    }

    public function getToncoinOnly(): bool
    {
        return $this->toncoinOnly;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setToncoinCentCount(int $value): static
    {
        $this->toncoinCentCount = $value;

        return $this;
    }

    public function setToncoinOnly(bool $value): static
    {
        $this->toncoinOnly = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'star_count'         => $this->starCount,
            'toncoin_cent_count' => $this->toncoinCentCount,
            'toncoin_only'       => $this->toncoinOnly,
        ];
    }
}
