<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Contains the content of a story
 */
class StoryContent extends TdObject
{
    public const TYPE_NAME = 'StoryContent';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StoryContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
