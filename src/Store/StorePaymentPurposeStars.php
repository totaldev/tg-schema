<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * The user buying Telegram Stars.
 */
class StorePaymentPurposeStars extends StorePaymentPurpose
{
    public const string TYPE_NAME = 'storePaymentPurposeStars';

    public function __construct(
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Identifier of the chat that is supposed to receive the Telegram Stars; pass 0 if none.
         */
        protected int    $chatId,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
        /**
         * Number of bought Telegram Stars.
         */
        protected int    $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposeStars
    {
        return new static(
            amount   : $array['amount'],
            chatId   : $array['chat_id'],
            currency : $array['currency'],
            starCount: $array['star_count'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'amount'     => $this->amount,
            'chat_id'    => $this->chatId,
            'currency'   => $this->currency,
            'star_count' => $this->starCount,
        ];
    }
}
