<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdObject;

/**
 * Describes price of a suggested post.
 */
class SuggestedPostPrice extends TdObject
{
    public const string TYPE_NAME = 'SuggestedPostPrice';

    public function __construct() {}

    public static function fromArray(array $array): SuggestedPostPrice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
