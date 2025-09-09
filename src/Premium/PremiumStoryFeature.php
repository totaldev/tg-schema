<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a story feature available to Premium users.
 */
class PremiumStoryFeature extends TdObject
{
    public const TYPE_NAME = 'PremiumStoryFeature';

    public function __construct() {}

    public static function fromArray(array $array): PremiumStoryFeature
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
