<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

use Totaldev\TgSchema\Giveaway\GiveawayParameters;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user creating a Telegram Premium giveaway.
 */
class TelegramPaymentPurposePremiumGiveaway extends TelegramPaymentPurpose
{
    public const string TYPE_NAME = 'telegramPaymentPurposePremiumGiveaway';

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
         * Number of months the Telegram Premium subscription will be active for the users.
         */
        protected int                $monthCount,
        /**
         * Giveaway parameters.
         */
        protected GiveawayParameters $parameters,
        /**
         * Number of users which will be able to activate the gift codes.
         */
        protected int                $winnerCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposePremiumGiveaway
    {
        return new static(
            amount     : $array['amount'],
            currency   : $array['currency'],
            monthCount : $array['month_count'],
            parameters : TdSchemaRegistry::fromArray($array['parameters']),
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

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getParameters(): GiveawayParameters
    {
        return $this->parameters;
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

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setParameters(GiveawayParameters $value): static
    {
        $this->parameters = $value;

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
            'month_count'  => $this->monthCount,
            'parameters'   => $this->parameters->jsonSerialize(),
            'winner_count' => $this->winnerCount,
        ];
    }
}
