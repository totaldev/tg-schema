<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Points to a file.
 */
class InputFile extends TdObject
{
    public const TYPE_NAME = 'InputFile';

    public function __construct() {}

    public static function fromArray(array $array): InputFile
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
