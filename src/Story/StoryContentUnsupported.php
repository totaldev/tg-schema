<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * A story content that is not supported in the current TDLib version.
 */
class StoryContentUnsupported extends StoryContent
{
    public const TYPE_NAME = 'storyContentUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
