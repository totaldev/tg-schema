<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a list of stories
 */
class StoryList extends TdObject
{
    public const TYPE_NAME = 'StoryList';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StoryList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
