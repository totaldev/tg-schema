<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat invite link was edited.
 */
class ChatEventInviteLinkEdited extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventInviteLinkEdited';

    public function __construct(
        /**
         * New information about the invite link.
         */
        protected ChatInviteLink $newInviteLink,
        /**
         * Previous information about the invite link.
         */
        protected ChatInviteLink $oldInviteLink,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventInviteLinkEdited
    {
        return new static(
            newInviteLink: TdSchemaRegistry::fromArray($array['new_invite_link']),
            oldInviteLink: TdSchemaRegistry::fromArray($array['old_invite_link']),
        );
    }

    public function getNewInviteLink(): ChatInviteLink
    {
        return $this->newInviteLink;
    }

    public function getOldInviteLink(): ChatInviteLink
    {
        return $this->oldInviteLink;
    }

    public function setNewInviteLink(ChatInviteLink $value): static
    {
        $this->newInviteLink = $value;

        return $this;
    }

    public function setOldInviteLink(ChatInviteLink $value): static
    {
        $this->oldInviteLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'new_invite_link' => $this->newInviteLink->jsonSerialize(),
            'old_invite_link' => $this->oldInviteLink->jsonSerialize(),
        ];
    }
}
