<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a paid media.
 */
class PaidMedia extends TdObject
{
    public const TYPE_NAME = 'PaidMedia';

    public function __construct() {}

    public static function fromArray(array $array): PaidMedia
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
