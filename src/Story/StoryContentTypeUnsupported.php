<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * A story of unknown content type.
 */
class StoryContentTypeUnsupported extends StoryContentType
{
    public const string TYPE_NAME = 'storyContentTypeUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentTypeUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
