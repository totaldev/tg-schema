<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns users under certain restrictions in the chat; can be used only by administrators in a supergroup
 */
class ChatMembersFilterRestricted extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterRestricted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterRestricted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
