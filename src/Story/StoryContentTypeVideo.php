<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * A video story.
 */
class StoryContentTypeVideo extends StoryContentType
{
    public const string TYPE_NAME = 'storyContentTypeVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentTypeVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
