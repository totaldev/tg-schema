<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the type of a chat
 */
class ChatType extends TdObject
{
    public const TYPE_NAME = 'ChatType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
