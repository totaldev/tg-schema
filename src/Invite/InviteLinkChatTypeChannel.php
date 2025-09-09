<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The link is an invite link for a channel.
 */
class InviteLinkChatTypeChannel extends InviteLinkChatType
{
    public const TYPE_NAME = 'inviteLinkChatTypeChannel';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteLinkChatTypeChannel
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
