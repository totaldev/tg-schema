<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a type of public chats
 */
class PublicChatType extends TdObject
{
    public const TYPE_NAME = 'PublicChatType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PublicChatType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
