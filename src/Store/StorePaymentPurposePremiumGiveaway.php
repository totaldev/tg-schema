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
         * Paid amount, in the smallest units of the currency.
         */
        protected int                $amount,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string             $currency,
        /**
         * Giveaway parameters.
         */
        protected GiveawayParameters $parameters,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumGiveaway
    {
        return new static(
            amount    : $array['amount'],
            currency  : $array['currency'],
            parameters: TdSchemaRegistry::fromArray($array['parameters']),
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
            'amount'     => $this->amount,
            'currency'   => $this->currency,
            'parameters' => $this->parameters->jsonSerialize(),
        ];
    }
}
