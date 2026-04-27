<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

/**
 * The user buying Telegram Stars for other users.
 */
class TelegramPaymentPurposeGiftedStars extends TelegramPaymentPurpose
{
    public const string TYPE_NAME = 'telegramPaymentPurposeGiftedStars';

    public function __construct(
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
        /**
         * Number of bought Telegram Stars.
         */
        protected int    $starCount,
        /**
         * Identifier of the user to which Telegram Stars are gifted.
         */
        protected int    $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposeGiftedStars
    {
        return new static(
            amount   : $array['amount'],
            currency : $array['currency'],
            starCount: $array['star_count'],
            userId   : $array['user_id'],
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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setAmount(int $value): static
    {
        $this->amount = $value;

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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'amount'     => $this->amount,
            'currency'   => $this->currency,
            'star_count' => $this->starCount,
            'user_id'    => $this->userId,
        ];
    }
}
