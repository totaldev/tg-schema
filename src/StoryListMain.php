<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The list of stories, shown in the main chat list and folder chat lists
 */
class StoryListMain extends StoryList
{
    public const TYPE_NAME = 'storyListMain';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryListMain
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
