<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a public forward or repost of a story.
 */
class PublicForward extends TdObject
{
    public const TYPE_NAME = 'PublicForward';

    public function __construct() {}

    public static function fromArray(array $array): PublicForward
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
