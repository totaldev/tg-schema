<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of stories posted per month.
 */
class PremiumLimitTypeMonthlyPostedStoryCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeMonthlyPostedStoryCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeMonthlyPostedStoryCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
