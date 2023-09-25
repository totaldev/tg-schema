<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Target;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the target chat to be opened
 */
class TargetChat extends TdObject
{
    public const TYPE_NAME = 'TargetChat';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TargetChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
