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
    public const TYPE_NAME = 'chatEventInviteLinkEdited';

    public function __construct(
        /**
         * Previous information about the invite link.
         */
        protected ChatInviteLink $oldInviteLink,
        /**
         * New information about the invite link.
         */
        protected ChatInviteLink $newInviteLink,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventInviteLinkEdited
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_invite_link']),
            TdSchemaRegistry::fromArray($array['new_invite_link']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'old_invite_link' => $this->oldInviteLink->typeSerialize(),
            'new_invite_link' => $this->newInviteLink->typeSerialize(),
        ];
    }
}
