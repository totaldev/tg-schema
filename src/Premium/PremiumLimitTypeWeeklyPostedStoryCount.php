<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of stories posted per week.
 */
class PremiumLimitTypeWeeklyPostedStoryCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeWeeklyPostedStoryCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeWeeklyPostedStoryCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
