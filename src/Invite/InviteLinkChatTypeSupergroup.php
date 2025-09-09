<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The link is an invite link for a supergroup.
 */
class InviteLinkChatTypeSupergroup extends InviteLinkChatType
{
    public const TYPE_NAME = 'inviteLinkChatTypeSupergroup';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteLinkChatTypeSupergroup
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
