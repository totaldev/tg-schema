<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The link is an invite link for a basic group.
 */
class InviteLinkChatTypeBasicGroup extends InviteLinkChatType
{
    public const TYPE_NAME = 'inviteLinkChatTypeBasicGroup';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteLinkChatTypeBasicGroup
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
