<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a call.
 */
class InputCall extends TdObject
{
    public const string TYPE_NAME = 'InputCall';

    public function __construct() {}

    public static function fromArray(array $array): InputCall
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
