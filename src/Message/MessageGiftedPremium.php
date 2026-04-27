<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Telegram Premium was gifted to a user.
 */
class MessageGiftedPremium extends MessageContent
{
    public const string TYPE_NAME = 'messageGiftedPremium';

    public function __construct(
        /**
         * The paid amount, in the smallest units of the currency.
         */
        protected int           $amount,
        /**
         * Cryptocurrency used to pay for the gift; may be empty if none.
         */
        protected string        $cryptocurrency,
        /**
         * The paid amount, in the smallest units of the cryptocurrency; 0 if none.
         */
        protected int           $cryptocurrencyAmount,
        /**
         * Currency for the paid amount.
         */
        protected string        $currency,
        /**
         * Number of days the Telegram Premium subscription will be active.
         */
        protected int           $dayCount,
        /**
         * The identifier of a user who gifted Telegram Premium; 0 if the gift was anonymous or is outgoing.
         */
        protected int           $gifterUserId,
        /**
         * Number of months the Telegram Premium subscription will be active after code activation; 0 if the number of months isn't integer.
         */
        protected int           $monthCount,
        /**
         * The identifier of a user who received Telegram Premium; 0 if the gift is incoming.
         */
        protected int           $receiverUserId,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker      $sticker,
        /**
         * Message added to the gifted Telegram Premium by the sender.
         */
        protected FormattedText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiftedPremium
    {
        return new static(
            amount              : $array['amount'],
            cryptocurrency      : $array['cryptocurrency'],
            cryptocurrencyAmount: $array['cryptocurrency_amount'],
            currency            : $array['currency'],
            dayCount            : $array['day_count'],
            gifterUserId        : $array['gifter_user_id'],
            monthCount          : $array['month_count'],
            receiverUserId      : $array['receiver_user_id'],
            sticker             : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            text                : TdSchemaRegistry::fromArray($array['text']),
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

    public function getDayCount(): int
    {
        return $this->dayCount;
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

    public function getText(): FormattedText
    {
        return $this->text;
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

    public function setDayCount(int $value): static
    {
        $this->dayCount = $value;

        return $this;
    }

    public function setGifterUserId(int $value): static
    {
        $this->gifterUserId = $value;

        return $this;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setReceiverUserId(int $value): static
    {
        $this->receiverUserId = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

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
            'day_count'             => $this->dayCount,
            'gifter_user_id'        => $this->gifterUserId,
            'month_count'           => $this->monthCount,
            'receiver_user_id'      => $this->receiverUserId,
            'sticker'               => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'text'                  => $this->text->jsonSerialize(),
        ];
    }
}
