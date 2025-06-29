<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

/**
 * The user buying Telegram Stars.
 */
class TelegramPaymentPurposeStars extends TelegramPaymentPurpose
{
    public const TYPE_NAME = 'telegramPaymentPurposeStars';

    public function __construct(
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Number of bought Telegram Stars.
         */
        protected int    $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposeStars
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['star_count'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'currency'   => $this->currency,
            'amount'     => $this->amount,
            'star_count' => $this->starCount,
        ];
    }
}
