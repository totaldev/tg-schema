<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of clickable area on a story media.
 */
class StoryAreaType extends TdObject
{
    public const TYPE_NAME = 'StoryAreaType';

    public function __construct() {}

    public static function fromArray(array $array): StoryAreaType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
