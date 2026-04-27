<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ban;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Bans a member in a chat; requires can_restrict_members administrator right. Members can't be banned in private or secret chats. In supergroups and channels,
 * the user will not be able to return to the group on their own using invite links, etc., unless unbanned first.
 */
class BanChatMember extends TdFunction
{
    public const string TYPE_NAME = 'banChatMember';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Ignored in basic groups and if a chat is banned.
         */
        protected int           $bannedUntilDate,
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Member identifier.
         */
        protected MessageSender $memberId,
        /**
         * Pass true to delete all messages in the chat for the user who is being removed. Always true for supergroups and channels.
         */
        protected bool          $revokeMessages,
    ) {}

    public static function fromArray(array $array): BanChatMember
    {
        return new static(
            bannedUntilDate: $array['banned_until_date'],
            chatId         : $array['chat_id'],
            memberId       : TdSchemaRegistry::fromArray($array['member_id']),
            revokeMessages : $array['revoke_messages'],
        );
    }

    public function getBannedUntilDate(): int
    {
        return $this->bannedUntilDate;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function getRevokeMessages(): bool
    {
        return $this->revokeMessages;
    }

    public function setBannedUntilDate(int $value): static
    {
        $this->bannedUntilDate = $value;

        return $this;
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

    public function setRevokeMessages(bool $value): static
    {
        $this->revokeMessages = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'banned_until_date' => $this->bannedUntilDate,
            'chat_id'           => $this->chatId,
            'member_id'         => $this->memberId->jsonSerialize(),
            'revoke_messages'   => $this->revokeMessages,
        ];
    }
}
