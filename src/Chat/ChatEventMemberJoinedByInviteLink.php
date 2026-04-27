<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new member joined the chat via an invite link.
 */
class ChatEventMemberJoinedByInviteLink extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMemberJoinedByInviteLink';

    public function __construct(
        /**
         * Invite link used to join the chat.
         */
        protected ChatInviteLink $inviteLink,
        /**
         * True, if the user has joined the chat using an invite link for a chat folder.
         */
        protected bool           $viaChatFolderInviteLink,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberJoinedByInviteLink
    {
        return new static(
            inviteLink             : TdSchemaRegistry::fromArray($array['invite_link']),
            viaChatFolderInviteLink: $array['via_chat_folder_invite_link'],
        );
    }

    public function getInviteLink(): ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }

    public function setInviteLink(ChatInviteLink $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setViaChatFolderInviteLink(bool $value): static
    {
        $this->viaChatFolderInviteLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'invite_link'                 => $this->inviteLink->jsonSerialize(),
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
        ];
    }
}
