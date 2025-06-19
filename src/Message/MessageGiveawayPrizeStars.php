<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Stars were received by the current user from a giveaway.
 */
class MessageGiveawayPrizeStars extends MessageContent
{
    public const TYPE_NAME = 'messageGiveawayPrizeStars';

    public function __construct(
        /**
         * Number of Telegram Stars that were received.
         */
        protected int      $starCount,
        /**
         * Identifier of the transaction for Telegram Stars credit.
         */
        protected string   $transactionId,
        /**
         * Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway.
         */
        protected int      $boostedChatId,
        /**
         * Identifier of the message with the giveaway in the boosted chat; can be 0 if the message was deleted.
         */
        protected int      $giveawayMessageId,
        /**
         * True, if the corresponding winner wasn't chosen and the Telegram Stars were received by the owner of the boosted chat.
         */
        protected bool     $isUnclaimed,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayPrizeStars
    {
        return new static(
            $array['star_count'],
            $array['transaction_id'],
            $array['boosted_chat_id'],
            $array['giveaway_message_id'],
            $array['is_unclaimed'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function getIsUnclaimed(): bool
    {
        return $this->isUnclaimed;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'star_count'          => $this->starCount,
            'transaction_id'      => $this->transactionId,
            'boosted_chat_id'     => $this->boostedChatId,
            'giveaway_message_id' => $this->giveawayMessageId,
            'is_unclaimed'        => $this->isUnclaimed,
            'sticker'             => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}
