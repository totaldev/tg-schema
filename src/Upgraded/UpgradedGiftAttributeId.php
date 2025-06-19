<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;

/**
 * Contains identifier of an upgraded gift attribute to search for.
 */
class UpgradedGiftAttributeId extends TdObject
{
    public const TYPE_NAME = 'UpgradedGiftAttributeId';

    public function __construct() {}

    public static function fromArray(array $array): UpgradedGiftAttributeId
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
