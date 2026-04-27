<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Describes price of a suggested post in Toncoins.
 */
class SuggestedPostPriceTon extends SuggestedPostPrice
{
    public const string TYPE_NAME = 'suggestedPostPriceTon';

    public function __construct(
        /**
         * The amount of 1/100 of Toncoin expected to be paid for the post; getOption("suggested_post_toncoin_cent_count_min")-getOption("suggested_post_toncoin_cent_count_max").
         */
        protected int $toncoinCentCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostPriceTon
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
