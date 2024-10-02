<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of stories sent per month.
 */
class PremiumLimitTypeMonthlySentStoryCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeMonthlySentStoryCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeMonthlySentStoryCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
