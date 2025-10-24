<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

use Totaldev\TgSchema\Giveaway\GiveawayParameters;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user creating a Telegram Premium giveaway.
 */
class StorePaymentPurposePremiumGiveaway extends StorePaymentPurpose
{
    public const string TYPE_NAME = 'storePaymentPurposePremiumGiveaway';

    public function __construct(
        /**
         * Giveaway parameters.
         */
        protected GiveawayParameters $parameters,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string             $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int                $amount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumGiveaway
    {
        return new static(
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['currency'],
            $array['amount'],
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

    public function getParameters(): GiveawayParameters
    {
        return $this->parameters;
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

    public function setParameters(GiveawayParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'parameters' => $this->parameters->typeSerialize(),
            'currency'   => $this->currency,
            'amount'     => $this->amount,
        ];
    }
}
