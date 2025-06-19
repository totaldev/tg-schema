<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user gifting Telegram Premium to another user.
 */
class StorePaymentPurposePremiumGift extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposePremiumGift';

    public function __construct(
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string        $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int           $amount,
        /**
         * Identifiers of the user which will receive Telegram Premium.
         */
        protected int           $userId,
        /**
         * Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
         */
        protected FormattedText $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumGift
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['user_id'],
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
            '@type'    => static::TYPE_NAME,
            'currency' => $this->currency,
            'amount'   => $this->amount,
            'user_id'  => $this->userId,
            'text'     => $this->text->typeSerialize(),
        ];
    }
}
