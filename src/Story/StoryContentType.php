<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the type of the content of a story.
 */
class StoryContentType extends TdObject
{
    public const string TYPE_NAME = 'StoryContentType';

    public function __construct() {}

    public static function fromArray(array $array): StoryContentType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
