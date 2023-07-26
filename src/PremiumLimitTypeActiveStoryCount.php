<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The maximum number of active stories
 */
class PremiumLimitTypeActiveStoryCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeActiveStoryCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeActiveStoryCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
