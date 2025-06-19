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
    public const TYPE_NAME = 'chatInviteLinkMember';

    public function __construct(
        /**
         * User identifier.
         */
        protected int  $userId,
        /**
         * Point in time (Unix timestamp) when the user joined the chat.
         */
        protected int  $joinedChatDate,
        /**
         * True, if the user has joined the chat using an invite link for a chat folder.
         */
        protected bool $viaChatFolderInviteLink,
        /**
         * User identifier of the chat administrator, approved user join request.
         */
        protected int  $approverUserId
    ) {}

    public static function fromArray(array $array): ChatInviteLinkMember
    {
        return new static(
            $array['user_id'],
            $array['joined_chat_date'],
            $array['via_chat_folder_invite_link'],
            $array['approver_user_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'user_id'                     => $this->userId,
            'joined_chat_date'            => $this->joinedChatDate,
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
            'approver_user_id'            => $this->approverUserId,
        ];
    }
}
