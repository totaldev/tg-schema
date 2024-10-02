<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns all contacts of the user.
 */
class GetContacts extends TdFunction
{
    public const TYPE_NAME = 'getContacts';

    public function __construct() {}

    public static function fromArray(array $array): GetContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
