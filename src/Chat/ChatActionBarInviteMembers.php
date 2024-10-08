<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat is a recently created group chat to which new members can be invited.
 */
class ChatActionBarInviteMembers extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarInviteMembers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarInviteMembers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
