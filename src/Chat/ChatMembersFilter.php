<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Specifies the kind of chat members to return in searchChatMembers.
 */
class ChatMembersFilter extends TdObject
{
    public const TYPE_NAME = 'ChatMembersFilter';

    public function __construct() {}

    public static function fromArray(array $array): ChatMembersFilter
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
