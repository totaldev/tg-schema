<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Provides information about the status of a member in a chat
 */
class ChatMemberStatus extends TdObject
{
    public const TYPE_NAME = 'ChatMemberStatus';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatMemberStatus
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
