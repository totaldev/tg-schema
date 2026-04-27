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
    public const string TYPE_NAME = 'chatMember';

    public function __construct(
        /**
         * Identifier of a user who invited/promoted/banned this member in the chat; 0 if unknown.
         */
        protected int              $inviterUserId,
        /**
         * Point in time (Unix timestamp) when the user joined/was promoted/was banned in the chat.
         */
        protected int              $joinedChatDate,
        /**
         * Identifier of the chat member. Currently, other chats can be only Left or Banned. Only supergroups and channels can have other chats as Left or Banned members and these chats must be supergroups or channels.
         */
        protected MessageSender    $memberId,
        /**
         * Status of the member in the chat.
         */
        protected ChatMemberStatus $status,
        /**
         * Tag of the chat member or its custom title if the member is an administrator of the chat; 0-16 characters without emoji; applicable to basic groups and supergroups only.
         */
        protected string           $tag,
    ) {}

    public static function fromArray(array $array): ChatMember
    {
        return new static(
            inviterUserId : $array['inviter_user_id'],
            joinedChatDate: $array['joined_chat_date'],
            memberId      : TdSchemaRegistry::fromArray($array['member_id']),
            status        : TdSchemaRegistry::fromArray($array['status']),
            tag           : $array['tag'],
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

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setInviterUserId(int $value): static
    {
        $this->inviterUserId = $value;

        return $this;
    }

    public function setJoinedChatDate(int $value): static
    {
        $this->joinedChatDate = $value;

        return $this;
    }

    public function setMemberId(MessageSender $value): static
    {
        $this->memberId = $value;

        return $this;
    }

    public function setStatus(ChatMemberStatus $value): static
    {
        $this->status = $value;

        return $this;
    }

    public function setTag(string $value): static
    {
        $this->tag = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'inviter_user_id'  => $this->inviterUserId,
            'joined_chat_date' => $this->joinedChatDate,
            'member_id'        => $this->memberId->jsonSerialize(),
            'status'           => $this->status->jsonSerialize(),
            'tag'              => $this->tag,
        ];
    }
}
