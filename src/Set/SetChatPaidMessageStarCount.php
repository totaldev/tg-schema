<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the amount of Telegram Stars that must be paid to send a message to a supergroup chat; requires can_restrict_members administrator right and
 * supergroupFullInfo.can_enable_paid_messages.
 */
class SetChatPaidMessageStarCount extends TdFunction
{
    public const TYPE_NAME = 'setChatPaidMessageStarCount';

    public function __construct(
        /**
         * Identifier of the supergroup chat.
         */
        protected int $chatId,
        /**
         * The new number of Telegram Stars that must be paid for each message that is sent to the supergroup chat unless the sender is an administrator of the chat; 0-getOption("paid_message_star_count_max"). The supergroup will receive getOption("paid_message_earnings_per_mille") Telegram Stars for each 1000 Telegram Stars paid for message sending.
         */
        protected int $paidMessageStarCount
    ) {}

    public static function fromArray(array $array): SetChatPaidMessageStarCount
    {
        return new static(
            $array['chat_id'],
            $array['paid_message_star_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
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
            'paid_message_star_count' => $this->paidMessageStarCount,
        ];
    }
}
