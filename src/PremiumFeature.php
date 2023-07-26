<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a feature available to Premium users
 */
class PremiumFeature extends TdObject
{
    public const TYPE_NAME = 'PremiumFeature';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PremiumFeature
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
