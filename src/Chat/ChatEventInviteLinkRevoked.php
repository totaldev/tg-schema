<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat invite link was revoked
 */
class ChatEventInviteLinkRevoked extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventInviteLinkRevoked';

    /**
     * The invite link
     *
     * @var ChatInviteLink
     */
    protected ChatInviteLink $inviteLink;

    public function __construct(ChatInviteLink $inviteLink)
    {
        parent::__construct();

        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): ChatEventInviteLinkRevoked
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invite_link']),
        );
    }

    public function getInviteLink(): ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink->typeSerialize(),
        ];
    }
}
