<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes resale price of a unique gift owned by the current user.
 */
class SetGiftResalePrice extends TdFunction
{
    public const TYPE_NAME = 'setGiftResalePrice';

    public function __construct(
        /**
         * Identifier of the unique gift.
         */
        protected string $receivedGiftId,
        /**
         * The new price for the unique gift; 0 or getOption("gift_resale_star_count_min")-getOption("gift_resale_star_count_max"). Pass 0 to disallow gift resale. The current user will receive getOption("gift_resale_earnings_per_mille") Telegram Stars for each 1000 Telegram Stars paid for the gift.
         */
        protected int    $resaleStarCount
    ) {}

    public static function fromArray(array $array): SetGiftResalePrice
    {
        return new static(
            $array['received_gift_id'],
            $array['resale_star_count'],
        );
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getResaleStarCount(): int
    {
        return $this->resaleStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'received_gift_id'  => $this->receivedGiftId,
            'resale_star_count' => $this->resaleStarCount,
        ];
    }
}
