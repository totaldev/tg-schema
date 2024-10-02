<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Telegram Premium was gifted to a user.
 */
class MessageGiftedPremium extends MessageContent
{
    public const TYPE_NAME = 'messageGiftedPremium';

    public function __construct(
        /**
         * The identifier of a user that gifted Telegram Premium; 0 if the gift was anonymous or is outgoing.
         */
        protected int      $gifterUserId,
        /**
         * The identifier of a user that received Telegram Premium; 0 if the gift is incoming.
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
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int      $monthCount,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiftedPremium
    {
        return new static(
            $array['gifter_user_id'],
            $array['receiver_user_id'],
            $array['currency'],
            $array['amount'],
            $array['cryptocurrency'],
            $array['cryptocurrency_amount'],
            $array['month_count'],
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

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getReceiverUserId(): int
    {
        return $this->receiverUserId;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
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
            'month_count'           => $this->monthCount,
            'sticker'               => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}
