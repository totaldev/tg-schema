<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdObject;

/**
 * Represents result of checking whether the current user can post a story on behalf of the specific chat.
 */
class CanPostStoryResult extends TdObject
{
    public const TYPE_NAME = 'CanPostStoryResult';

    public function __construct() {}

    public static function fromArray(array $array): CanPostStoryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
