<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

use Totaldev\TgSchema\Giveaway\GiveawayParameters;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user creating a Telegram Star giveaway.
 */
class StorePaymentPurposeStarGiveaway extends StorePaymentPurpose
{
    public const string TYPE_NAME = 'storePaymentPurposeStarGiveaway';

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
        /**
         * The number of Telegram Stars to be distributed through the giveaway.
         */
        protected int                $starCount,
        /**
         * The number of users to receive Telegram Stars.
         */
        protected int                $winnerCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposeStarGiveaway
    {
        return new static(
            amount     : $array['amount'],
            currency   : $array['currency'],
            parameters : TdSchemaRegistry::fromArray($array['parameters']),
            starCount  : $array['star_count'],
            winnerCount: $array['winner_count'],
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

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
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

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'amount'       => $this->amount,
            'currency'     => $this->currency,
            'parameters'   => $this->parameters->jsonSerialize(),
            'star_count'   => $this->starCount,
            'winner_count' => $this->winnerCount,
        ];
    }
}
