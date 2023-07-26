<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The maximum length of the user's bio
 */
class PremiumLimitTypeBioLength extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeBioLength';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeBioLength
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
