<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * A photo story.
 */
class StoryContentTypePhoto extends StoryContentType
{
    public const string TYPE_NAME = 'storyContentTypePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentTypePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
