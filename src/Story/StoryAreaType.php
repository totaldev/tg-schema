<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes type of a clickable rectangle area on a story media
 */
class StoryAreaType extends TdObject
{
    public const TYPE_NAME = 'StoryAreaType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StoryAreaType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
