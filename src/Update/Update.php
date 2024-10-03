<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdObject;

/**
 * Contains notifications about data changes.
 */
class Update extends TdObject
{
    public const TYPE_NAME = 'Update';

    public function __construct() {}

    public static function fromArray(array $array): Update
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
