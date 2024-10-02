<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

use Totaldev\TgSchema\Giveaway\GiveawayParameters;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user creating a Telegram Star giveaway.
 */
class TelegramPaymentPurposeStarGiveaway extends TelegramPaymentPurpose
{
    public const TYPE_NAME = 'telegramPaymentPurposeStarGiveaway';

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
         * The number of users to receive Telegram Stars.
         */
        protected int                $winnerCount,
        /**
         * The number of Telegram Stars to be distributed through the giveaway.
         */
        protected int                $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposeStarGiveaway
    {
        return new static(
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['currency'],
            $array['amount'],
            $array['winner_count'],
            $array['star_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'parameters'   => $this->parameters->typeSerialize(),
            'currency'     => $this->currency,
            'amount'       => $this->amount,
            'winner_count' => $this->winnerCount,
            'star_count'   => $this->starCount,
        ];
    }
}
