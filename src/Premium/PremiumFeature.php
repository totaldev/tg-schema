<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a feature available to Premium users.
 */
class PremiumFeature extends TdObject
{
    public const TYPE_NAME = 'PremiumFeature';

    public function __construct() {}

    public static function fromArray(array $array): PremiumFeature
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
