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
    public const string TYPE_NAME = 'storePaymentPurposePremiumGift';

    public function __construct(
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int           $amount,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string        $currency,
        /**
         * Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, and DateTime entities are allowed.
         */
        protected FormattedText $text,
        /**
         * Identifiers of the user which will receive Telegram Premium.
         */
        protected int           $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumGift
    {
        return new static(
            amount  : $array['amount'],
            currency: $array['currency'],
            text    : TdSchemaRegistry::fromArray($array['text']),
            userId  : $array['user_id'],
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

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

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
            '@type'    => static::TYPE_NAME,
            'amount'   => $this->amount,
            'currency' => $this->currency,
            'text'     => $this->text->jsonSerialize(),
            'user_id'  => $this->userId,
        ];
    }
}
