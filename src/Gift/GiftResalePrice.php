<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes price of a resold gift.
 */
class GiftResalePrice extends TdObject
{
    public const string TYPE_NAME = 'GiftResalePrice';

    public function __construct() {}

    public static function fromArray(array $array): GiftResalePrice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
