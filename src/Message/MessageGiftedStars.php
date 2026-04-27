<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Telegram Stars were gifted to a user.
 */
class MessageGiftedStars extends MessageContent
{
    public const string TYPE_NAME = 'messageGiftedStars';

    public function __construct(
        /**
         * The paid amount, in the smallest units of the currency.
         */
        protected int      $amount,
        /**
         * Cryptocurrency used to pay for the gift; may be empty if none.
         */
        protected string   $cryptocurrency,
        /**
         * The paid amount, in the smallest units of the cryptocurrency; 0 if none.
         */
        protected int      $cryptocurrencyAmount,
        /**
         * Currency for the paid amount.
         */
        protected string   $currency,
        /**
         * The identifier of a user that gifted Telegram Stars; 0 if the gift was anonymous or is outgoing.
         */
        protected int      $gifterUserId,
        /**
         * The identifier of a user that received Telegram Stars; 0 if the gift is incoming.
         */
        protected int      $receiverUserId,
        /**
         * Number of Telegram Stars that were gifted.
         */
        protected int      $starCount,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker $sticker,
        /**
         * Identifier of the transaction for Telegram Stars purchase; for receiver only.
         */
        protected string   $transactionId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiftedStars
    {
        return new static(
            amount              : $array['amount'],
            cryptocurrency      : $array['cryptocurrency'],
            cryptocurrencyAmount: $array['cryptocurrency_amount'],
            currency            : $array['currency'],
            gifterUserId        : $array['gifter_user_id'],
            receiverUserId      : $array['receiver_user_id'],
            starCount           : $array['star_count'],
            sticker             : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            transactionId       : $array['transaction_id'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getGifterUserId(): int
    {
        return $this->gifterUserId;
    }

    public function getReceiverUserId(): int
    {
        return $this->receiverUserId;
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

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setCryptocurrency(string $value): static
    {
        $this->cryptocurrency = $value;

        return $this;
    }

    public function setCryptocurrencyAmount(int $value): static
    {
        $this->cryptocurrencyAmount = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setGifterUserId(int $value): static
    {
        $this->gifterUserId = $value;

        return $this;
    }

    public function setReceiverUserId(int $value): static
    {
        $this->receiverUserId = $value;

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
            '@type'                 => static::TYPE_NAME,
            'amount'                => $this->amount,
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'currency'              => $this->currency,
            'gifter_user_id'        => $this->gifterUserId,
            'receiver_user_id'      => $this->receiverUserId,
            'star_count'            => $this->starCount,
            'sticker'               => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'transaction_id'        => $this->transactionId,
        ];
    }
}
