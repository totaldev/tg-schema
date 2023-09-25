<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents result of checking whether the current user can send a story in the specific chat
 */
class CanSendStoryResult extends TdObject
{
    public const TYPE_NAME = 'CanSendStoryResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CanSendStoryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
