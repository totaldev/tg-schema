<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;

/**
 * Describes origin from which the upgraded gift was obtained.
 */
class UpgradedGiftOrigin extends TdObject
{
    public const TYPE_NAME = 'UpgradedGiftOrigin';

    public function __construct() {}

    public static function fromArray(array $array): UpgradedGiftOrigin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
