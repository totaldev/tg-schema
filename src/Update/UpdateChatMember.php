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
    public const TYPE_NAME = 'updateChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * Identifier of the user, changing the rights.
         */
        protected int             $actorUserId,
        /**
         * Point in time (Unix timestamp) when the user rights were changed.
         */
        protected int             $date,
        /**
         * If user has joined the chat using an invite link, the invite link; may be null.
         */
        protected ?ChatInviteLink $inviteLink,
        /**
         * True, if the user has joined the chat after sending a join request and being approved by an administrator.
         */
        protected bool            $viaJoinRequest,
        /**
         * True, if the user has joined the chat using an invite link for a chat folder.
         */
        protected bool            $viaChatFolderInviteLink,
        /**
         * Previous chat member.
         */
        protected ChatMember      $oldChatMember,
        /**
         * New chat member.
         */
        protected ChatMember      $newChatMember,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatMember
    {
        return new static(
            $array['chat_id'],
            $array['actor_user_id'],
            $array['date'],
            isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null,
            $array['via_join_request'],
            $array['via_chat_folder_invite_link'],
            TdSchemaRegistry::fromArray($array['old_chat_member']),
            TdSchemaRegistry::fromArray($array['new_chat_member']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'chat_id'                     => $this->chatId,
            'actor_user_id'               => $this->actorUserId,
            'date'                        => $this->date,
            'invite_link'                 => (isset($this->inviteLink) ? $this->inviteLink : null),
            'via_join_request'            => $this->viaJoinRequest,
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
            'old_chat_member'             => $this->oldChatMember->typeSerialize(),
            'new_chat_member'             => $this->newChatMember->typeSerialize(),
        ];
    }
}
