<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a list of stories.
 */
class StoryList extends TdObject
{
    public const TYPE_NAME = 'StoryList';

    public function __construct() {}

    public static function fromArray(array $array): StoryList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
