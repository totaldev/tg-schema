<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of stories sent per week.
 */
class PremiumLimitTypeWeeklySentStoryCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeWeeklySentStoryCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeWeeklySentStoryCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
