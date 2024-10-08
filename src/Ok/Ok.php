<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ok;

use Totaldev\TgSchema\TdObject;

/**
 * An object of this type is returned on a successful function call for certain functions.
 */
class Ok extends TdObject
{
    public const TYPE_NAME = 'ok';

    public function __construct() {}

    public static function fromArray(array $array): Ok
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
