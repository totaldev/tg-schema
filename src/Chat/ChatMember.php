<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a user or a chat as a member of another chat.
 */
class ChatMember extends TdObject
{
    public const TYPE_NAME = 'chatMember';

    public function __construct(
        /**
         * Identifier of the chat member. Currently, other chats can be only Left or Banned. Only supergroups and channels can have other chats as Left or Banned members and these chats must be supergroups or channels.
         */
        protected MessageSender    $memberId,
        /**
         * Identifier of a user that invited/promoted/banned this member in the chat; 0 if unknown.
         */
        protected int              $inviterUserId,
        /**
         * Point in time (Unix timestamp) when the user joined/was promoted/was banned in the chat.
         */
        protected int              $joinedChatDate,
        /**
         * Status of the member in the chat.
         */
        protected ChatMemberStatus $status,
    ) {}

    public static function fromArray(array $array): ChatMember
    {
        return new static(
            TdSchemaRegistry::fromArray($array['member_id']),
            $array['inviter_user_id'],
            $array['joined_chat_date'],
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function getInviterUserId(): int
    {
        return $this->inviterUserId;
    }

    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'member_id'        => $this->memberId->typeSerialize(),
            'inviter_user_id'  => $this->inviterUserId,
            'joined_chat_date' => $this->joinedChatDate,
            'status'           => $this->status->typeSerialize(),
        ];
    }
}
