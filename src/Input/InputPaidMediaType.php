<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of paid media to sent.
 */
class InputPaidMediaType extends TdObject
{
    public const TYPE_NAME = 'InputPaidMediaType';

    public function __construct() {}

    public static function fromArray(array $array): InputPaidMediaType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
