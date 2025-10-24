<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of sending a resold gift.
 */
class GiftResaleResult extends TdObject
{
    public const string TYPE_NAME = 'GiftResaleResult';

    public function __construct() {}

    public static function fromArray(array $array): GiftResaleResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
