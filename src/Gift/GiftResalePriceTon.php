<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * Describes price of a resold gift in Toncoins.
 */
class GiftResalePriceTon extends GiftResalePrice
{
    public const string TYPE_NAME = 'giftResalePriceTon';

    public function __construct(
        /**
         * The amount of 1/100 of Toncoin expected to be paid for the gift. Must be in range getOption("gift_resale_toncoin_cent_count_min")-getOption("gift_resale_toncoin_cent_count_max").
         */
        protected int $toncoinCentCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftResalePriceTon
    {
        return new static(
            toncoinCentCount: $array['toncoin_cent_count'],
        );
    }

    public function getToncoinCentCount(): int
    {
        return $this->toncoinCentCount;
    }

    public function setToncoinCentCount(int $value): static
    {
        $this->toncoinCentCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'toncoin_cent_count' => $this->toncoinCentCount,
        ];
    }
}
