<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Diff;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a change of a text.
 */
class DiffEntityType extends TdObject
{
    public const string TYPE_NAME = 'DiffEntityType';

    public function __construct() {}

    public static function fromArray(array $array): DiffEntityType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
