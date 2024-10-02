<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The giveaway sends Telegram Stars to the winners.
 */
class GiveawayPrizeStars extends GiveawayPrize
{
    public const TYPE_NAME = 'giveawayPrizeStars';

    public function __construct(
        /**
         * Number of Telegram Stars that will be shared by all winners.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayPrizeStars
    {
        return new static(
            $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
        ];
    }
}
