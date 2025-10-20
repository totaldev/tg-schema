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
        protected int    $starCount,
        /**
         * Identifier of the chat that is supposed to receive the Telegram Stars; pass 0 if none.
         */
        protected int    $chatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposeStars
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['star_count'],
            $array['chat_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'currency'   => $this->currency,
            'amount'     => $this->amount,
            'star_count' => $this->starCount,
            'chat_id'    => $this->chatId,
        ];
    }
}
