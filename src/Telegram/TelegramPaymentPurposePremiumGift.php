<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user gifting Telegram Premium to another user.
 */
class TelegramPaymentPurposePremiumGift extends TelegramPaymentPurpose
{
    public const TYPE_NAME = 'telegramPaymentPurposePremiumGift';

    public function __construct(
        /**
         * ISO 4217 currency code of the payment currency, or "XTR" for payments in Telegram Stars.
         */
        protected string        $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int           $amount,
        /**
         * Identifier of the user which will receive Telegram Premium.
         */
        protected int           $userId,
        /**
         * Number of months the Telegram Premium subscription will be active for the user.
         */
        protected int           $monthCount,
        /**
         * Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
         */
        protected FormattedText $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposePremiumGift
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['user_id'],
            $array['month_count'],
            TdSchemaRegistry::fromArray($array['text']),
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

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'currency'    => $this->currency,
            'amount'      => $this->amount,
            'user_id'     => $this->userId,
            'month_count' => $this->monthCount,
            'text'        => $this->text->typeSerialize(),
        ];
    }
}
