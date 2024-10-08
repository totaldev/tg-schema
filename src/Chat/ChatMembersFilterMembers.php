<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Returns all chat members, including restricted chat members.
 */
class ChatMembersFilterMembers extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterMembers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterMembers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
