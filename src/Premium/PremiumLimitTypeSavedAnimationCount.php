<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of saved animations.
 */
class PremiumLimitTypeSavedAnimationCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeSavedAnimationCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeSavedAnimationCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
