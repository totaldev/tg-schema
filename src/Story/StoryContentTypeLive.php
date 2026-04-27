<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * A live story.
 */
class StoryContentTypeLive extends StoryContentType
{
    public const string TYPE_NAME = 'storyContentTypeLive';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentTypeLive
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
