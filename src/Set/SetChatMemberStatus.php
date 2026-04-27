<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatMemberStatus;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the status of a chat member; requires can_invite_users member right to add a chat member, can_promote_members administrator right to change
 * administrator rights of the member, and can_restrict_members administrator right to change restrictions of a user. This function is currently not suitable
 * for transferring chat ownership; use transferChatOwnership instead. Use addChatMember or banChatMember if some additional parameters needs to be passed.
 */
class SetChatMemberStatus extends TdFunction
{
    public const string TYPE_NAME = 'setChatMemberStatus';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int              $chatId,
        /**
         * Member identifier. Chats can be only banned and unbanned in supergroups and channels.
         */
        protected MessageSender    $memberId,
        /**
         * The new status of the member in the chat.
         */
        protected ChatMemberStatus $status,
    ) {}

    public static function fromArray(array $array): SetChatMemberStatus
    {
        return new static(
            chatId  : $array['chat_id'],
            memberId: TdSchemaRegistry::fromArray($array['member_id']),
            status  : TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'member_id' => $this->memberId->jsonSerialize(),
            'status'    => $this->status->jsonSerialize(),
        ];
    }
}
