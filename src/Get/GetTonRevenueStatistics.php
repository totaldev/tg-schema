<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns detailed Toncoin revenue statistics of the current user.
 */
class GetTonRevenueStatistics extends TdFunction
{
    public const TYPE_NAME = 'getTonRevenueStatistics';

    public function __construct(
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark
    ) {}

    public static function fromArray(array $array): GetTonRevenueStatistics
    {
        return new static(
            $array['is_dark'],
        );
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'is_dark' => $this->isDark,
        ];
    }
}
