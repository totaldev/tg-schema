<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes type of a limit, increased for Premium users
 */
class PremiumLimitType extends TdObject
{
    public const TYPE_NAME = 'PremiumLimitType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PremiumLimitType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
