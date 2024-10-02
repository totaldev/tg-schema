<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Collectible;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a collectible item that can be purchased at https://fragment.com.
 */
class CollectibleItemType extends TdObject
{
    public const TYPE_NAME = 'CollectibleItemType';

    public function __construct() {}

    public static function fromArray(array $array): CollectibleItemType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
