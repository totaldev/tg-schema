<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about the origin of a story that was reposted.
 */
class StoryOrigin extends TdObject
{
    public const TYPE_NAME = 'StoryOrigin';

    public function __construct() {}

    public static function fromArray(array $array): StoryOrigin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
