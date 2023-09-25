<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of stories, shown in the Arvhive chat list
 */
class StoryListArchive extends StoryList
{
    public const TYPE_NAME = 'storyListArchive';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryListArchive
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
