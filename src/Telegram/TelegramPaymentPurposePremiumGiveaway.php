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
    public const TYPE_NAME = 'telegramPaymentPurposePremiumGiveaway';

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
        /**
         * Number of users which will be able to activate the gift codes.
         */
        protected int                $winnerCount,
        /**
         * Number of months the Telegram Premium subscription will be active for the users.
         */
        protected int                $monthCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposePremiumGiveaway
    {
        return new static(
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['currency'],
            $array['amount'],
            $array['winner_count'],
            $array['month_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'parameters'   => $this->parameters->typeSerialize(),
            'currency'     => $this->currency,
            'amount'       => $this->amount,
            'winner_count' => $this->winnerCount,
            'month_count'  => $this->monthCount,
        ];
    }
}
