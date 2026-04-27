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
    public const string TYPE_NAME = 'messageGiveawayPrizeStars';

    public function __construct(
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
         * Number of Telegram Stars that were received.
         */
        protected int      $starCount,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker $sticker,
        /**
         * Identifier of the transaction for Telegram Stars credit.
         */
        protected string   $transactionId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayPrizeStars
    {
        return new static(
            boostedChatId    : $array['boosted_chat_id'],
            giveawayMessageId: $array['giveaway_message_id'],
            isUnclaimed      : $array['is_unclaimed'],
            starCount        : $array['star_count'],
            sticker          : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            transactionId    : $array['transaction_id'],
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

    public function setBoostedChatId(int $value): static
    {
        $this->boostedChatId = $value;

        return $this;
    }

    public function setGiveawayMessageId(int $value): static
    {
        $this->giveawayMessageId = $value;

        return $this;
    }

    public function setIsUnclaimed(bool $value): static
    {
        $this->isUnclaimed = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setTransactionId(string $value): static
    {
        $this->transactionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'boosted_chat_id'     => $this->boostedChatId,
            'giveaway_message_id' => $this->giveawayMessageId,
            'is_unclaimed'        => $this->isUnclaimed,
            'star_count'          => $this->starCount,
            'sticker'             => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'transaction_id'      => $this->transactionId,
        ];
    }
}
