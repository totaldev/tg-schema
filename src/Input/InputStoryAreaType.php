<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes type of a clickable rectangle area on a story media to be added
 */
class InputStoryAreaType extends TdObject
{
    public const TYPE_NAME = 'InputStoryAreaType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputStoryAreaType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
