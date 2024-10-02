<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of interaction with a story.
 */
class StoryInteractionType extends TdObject
{
    public const TYPE_NAME = 'StoryInteractionType';

    public function __construct() {}

    public static function fromArray(array $array): StoryInteractionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
