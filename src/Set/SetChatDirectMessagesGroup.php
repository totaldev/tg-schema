<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes direct messages group settings for a channel chat; requires owner privileges in the chat.
 */
class SetChatDirectMessagesGroup extends TdFunction
{
    public const TYPE_NAME = 'setChatDirectMessagesGroup';

    public function __construct(
        /**
         * Identifier of the channel chat.
         */
        protected int  $chatId,
        /**
         * Pass true if the direct messages group is enabled for the channel chat; pass false otherwise.
         */
        protected bool $isEnabled,
        /**
         * The new number of Telegram Stars that must be paid for each message that is sent to the direct messages chat unless the sender is an administrator of the channel chat; 0-getOption("paid_message_star_count_max"). The channel will receive getOption("paid_message_earnings_per_mille") Telegram Stars for each 1000 Telegram Stars paid for message sending. Requires supergroupFullInfo.can_enable_paid_messages for positive amounts.
         */
        protected int  $paidMessageStarCount
    ) {}

    public static function fromArray(array $array): SetChatDirectMessagesGroup
    {
        return new static(
            $array['chat_id'],
            $array['is_enabled'],
            $array['paid_message_star_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'is_enabled'              => $this->isEnabled,
            'paid_message_star_count' => $this->paidMessageStarCount,
        ];
    }
}
