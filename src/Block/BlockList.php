<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Block;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a type of a block list
 */
class BlockList extends TdObject
{
    public const TYPE_NAME = 'BlockList';

    public function __construct()
    {
    }

    public static function fromArray(array $array): BlockList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
