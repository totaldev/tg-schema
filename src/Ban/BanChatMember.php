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
    public const TYPE_NAME = 'banChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Member identifier.
         */
        protected MessageSender $memberId,
        /**
         * Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Ignored in basic groups and if a chat is banned.
         */
        protected int           $bannedUntilDate,
        /**
         * Pass true to delete all messages in the chat for the user that is being removed. Always true for supergroups and channels.
         */
        protected bool          $revokeMessages
    ) {}

    public static function fromArray(array $array): BanChatMember
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['member_id']),
            $array['banned_until_date'],
            $array['revoke_messages'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'member_id'         => $this->memberId->typeSerialize(),
            'banned_until_date' => $this->bannedUntilDate,
            'revoke_messages'   => $this->revokeMessages,
        ];
    }
}
