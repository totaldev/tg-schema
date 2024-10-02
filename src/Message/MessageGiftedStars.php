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
    public const TYPE_NAME = 'messageGiftedStars';

    public function __construct(
        /**
         * The identifier of a user that gifted Telegram Stars; 0 if the gift was anonymous or is outgoing.
         */
        protected int      $gifterUserId,
        /**
         * The identifier of a user that received Telegram Stars; 0 if the gift is incoming.
         */
        protected int      $receiverUserId,
        /**
         * Currency for the paid amount.
         */
        protected string   $currency,
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
         * Number of Telegram Stars that were gifted.
         */
        protected int      $starCount,
        /**
         * Identifier of the transaction for Telegram Stars purchase; for receiver only.
         */
        protected string   $transactionId,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiftedStars
    {
        return new static(
            $array['gifter_user_id'],
            $array['receiver_user_id'],
            $array['currency'],
            $array['amount'],
            $array['cryptocurrency'],
            $array['cryptocurrency_amount'],
            $array['star_count'],
            $array['transaction_id'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'gifter_user_id'        => $this->gifterUserId,
            'receiver_user_id'      => $this->receiverUserId,
            'currency'              => $this->currency,
            'amount'                => $this->amount,
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'star_count'            => $this->starCount,
            'transaction_id'        => $this->transactionId,
            'sticker'               => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}
