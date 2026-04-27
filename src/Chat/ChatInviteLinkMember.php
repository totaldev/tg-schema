<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a chat member joined a chat via an invite link.
 */
class ChatInviteLinkMember extends TdObject
{
    public const string TYPE_NAME = 'chatInviteLinkMember';

    public function __construct(
        /**
         * User identifier of the chat administrator, approved user join request.
         */
        protected int  $approverUserId,
        /**
         * Point in time (Unix timestamp) when the user joined the chat.
         */
        protected int  $joinedChatDate,
        /**
         * User identifier.
         */
        protected int  $userId,
        /**
         * True, if the user has joined the chat using an invite link for a chat folder.
         */
        protected bool $viaChatFolderInviteLink,
    ) {}

    public static function fromArray(array $array): ChatInviteLinkMember
    {
        return new static(
            approverUserId         : $array['approver_user_id'],
            joinedChatDate         : $array['joined_chat_date'],
            userId                 : $array['user_id'],
            viaChatFolderInviteLink: $array['via_chat_folder_invite_link'],
        );
    }

    public function getApproverUserId(): int
    {
        return $this->approverUserId;
    }

    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }

    public function setApproverUserId(int $value): static
    {
        $this->approverUserId = $value;

        return $this;
    }

    public function setJoinedChatDate(int $value): static
    {
        $this->joinedChatDate = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

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
            'approver_user_id'            => $this->approverUserId,
            'joined_chat_date'            => $this->joinedChatDate,
            'user_id'                     => $this->userId,
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
        ];
    }
}
