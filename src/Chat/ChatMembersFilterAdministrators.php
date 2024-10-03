<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Returns the owner and administrators.
 */
class ChatMembersFilterAdministrators extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterAdministrators';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterAdministrators
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
