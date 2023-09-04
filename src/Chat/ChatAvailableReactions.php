<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes reactions available in the chat
 */
class ChatAvailableReactions extends TdObject
{
    public const TYPE_NAME = 'ChatAvailableReactions';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatAvailableReactions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
