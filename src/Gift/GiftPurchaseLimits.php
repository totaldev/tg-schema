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
    public const string TYPE_NAME = 'giftPurchaseLimits';

    public function __construct(
        /**
         * Number of remaining times the gift can be purchased.
         */
        protected int $remainingCount,
        /**
         * The maximum number of times the gifts can be purchased.
         */
        protected int $totalCount,
    ) {}

    public static function fromArray(array $array): GiftPurchaseLimits
    {
        return new static(
            remainingCount: $array['remaining_count'],
            totalCount    : $array['total_count'],
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

    public function setRemainingCount(int $value): static
    {
        $this->remainingCount = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'remaining_count' => $this->remainingCount,
            'total_count'     => $this->totalCount,
        ];
    }
}
