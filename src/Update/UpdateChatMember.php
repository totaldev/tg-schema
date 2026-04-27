<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatInviteLink;
use Totaldev\TgSchema\Chat\ChatMember;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * User rights changed in a chat; for bots only.
 */
class UpdateChatMember extends Update
{
    public const string TYPE_NAME = 'updateChatMember';

    public function __construct(
        /**
         * Identifier of the user, changing the rights.
         */
        protected int             $actorUserId,
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * Point in time (Unix timestamp) when the user rights were changed.
         */
        protected int             $date,
        /**
         * If user has joined the chat using an invite link, the invite link; may be null.
         */
        protected ?ChatInviteLink $inviteLink,
        /**
         * New chat member.
         */
        protected ChatMember      $newChatMember,
        /**
         * Previous chat member.
         */
        protected ChatMember      $oldChatMember,
        /**
         * True, if the user has joined the chat using an invite link for a chat folder.
         */
        protected bool            $viaChatFolderInviteLink,
        /**
         * True, if the user has joined the chat after sending a join request and being approved by an administrator.
         */
        protected bool            $viaJoinRequest,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatMember
    {
        return new static(
            actorUserId            : $array['actor_user_id'],
            chatId                 : $array['chat_id'],
            date                   : $array['date'],
            inviteLink             : (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            newChatMember          : TdSchemaRegistry::fromArray($array['new_chat_member']),
            oldChatMember          : TdSchemaRegistry::fromArray($array['old_chat_member']),
            viaChatFolderInviteLink: $array['via_chat_folder_invite_link'],
            viaJoinRequest         : $array['via_join_request'],
        );
    }

    public function getActorUserId(): int
    {
        return $this->actorUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getNewChatMember(): ChatMember
    {
        return $this->newChatMember;
    }

    public function getOldChatMember(): ChatMember
    {
        return $this->oldChatMember;
    }

    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }

    public function getViaJoinRequest(): bool
    {
        return $this->viaJoinRequest;
    }

    public function setActorUserId(int $value): static
    {
        $this->actorUserId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setInviteLink(?ChatInviteLink $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setNewChatMember(ChatMember $value): static
    {
        $this->newChatMember = $value;

        return $this;
    }

    public function setOldChatMember(ChatMember $value): static
    {
        $this->oldChatMember = $value;

        return $this;
    }

    public function setViaChatFolderInviteLink(bool $value): static
    {
        $this->viaChatFolderInviteLink = $value;

        return $this;
    }

    public function setViaJoinRequest(bool $value): static
    {
        $this->viaJoinRequest = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'actor_user_id'               => $this->actorUserId,
            'chat_id'                     => $this->chatId,
            'date'                        => $this->date,
            'invite_link'                 => (null !== $this->inviteLink ? $this->inviteLink->jsonSerialize() : null),
            'new_chat_member'             => $this->newChatMember->jsonSerialize(),
            'old_chat_member'             => $this->oldChatMember->jsonSerialize(),
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
            'via_join_request'            => $this->viaJoinRequest,
        ];
    }
}
