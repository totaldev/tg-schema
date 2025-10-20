<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the maximum number of times that a specific gift can be purchased.
 */
class GiftPurchaseLimits extends TdObject
{
    public const TYPE_NAME = 'giftPurchaseLimits';

    public function __construct(
        /**
         * The maximum number of times the gifts can be purchased.
         */
        protected int $totalCount,
        /**
         * Number of remaining times the gift can be purchased.
         */
        protected int $remainingCount,
    ) {}

    public static function fromArray(array $array): GiftPurchaseLimits
    {
        return new static(
            $array['total_count'],
            $array['remaining_count'],
        );
    }

    public function getRemainingCount(): int
    {
        return $this->remainingCount;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'total_count'     => $this->totalCount,
            'remaining_count' => $this->remainingCount,
        ];
    }
}
