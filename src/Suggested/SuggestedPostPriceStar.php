<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Describes price of a suggested post in Telegram Stars.
 */
class SuggestedPostPriceStar extends SuggestedPostPrice
{
    public const string TYPE_NAME = 'suggestedPostPriceStar';

    public function __construct(
        /**
         * The Telegram Star amount expected to be paid for the post; getOption("suggested_post_star_count_min")-getOption("suggested_post_star_count_max").
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostPriceStar
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
