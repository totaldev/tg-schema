<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a deposit of Telegram Stars from a giveaway; relevant for regular users only.
 */
class StarTransactionTypeGiveawayDeposit extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiveawayDeposit';

    public function __construct(
        /**
         * Identifier of a supergroup or a channel chat that created the giveaway.
         */
        protected int $chatId,
        /**
         * Identifier of the message with the giveaway; may be 0 or an identifier of a deleted message.
         */
        protected int $giveawayMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiveawayDeposit
    {
        return new static(
            chatId           : $array['chat_id'],
            giveawayMessageId: $array['giveaway_message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setGiveawayMessageId(int $value): static
    {
        $this->giveawayMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'giveaway_message_id' => $this->giveawayMessageId,
        ];
    }
}
