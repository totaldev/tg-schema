<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes subscription plan paid in Telegram Stars.
 */
class StarSubscriptionPricing extends TdObject
{
    public const TYPE_NAME = 'starSubscriptionPricing';

    public function __construct(
        /**
         * The number of seconds between consecutive Telegram Star debiting.
         */
        protected int $period,
        /**
         * The amount of Telegram Stars that must be paid for each period.
         */
        protected int $starCount
    ) {}

    public static function fromArray(array $array): StarSubscriptionPricing
    {
        return new static(
            $array['period'],
            $array['star_count'],
        );
    }

    public function getPeriod(): int
    {
        return $this->period;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'period'     => $this->period,
            'star_count' => $this->starCount,
        ];
    }
}
