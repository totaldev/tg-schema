<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the sticker to be used as representation of the Telegram Premium subscription.
 */
class GetPremiumInfoSticker extends TdFunction
{
    public const string TYPE_NAME = 'getPremiumInfoSticker';

    public function __construct(
        /**
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int $monthCount
    ) {}

    public static function fromArray(array $array): GetPremiumInfoSticker
    {
        return new static(
            $array['month_count'],
        );
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'month_count' => $this->monthCount,
        ];
    }
}
