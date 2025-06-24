<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an option for creating of Telegram Star giveaway. Use telegramPaymentPurposeStarGiveaway for out-of-store payments.
 */
class StarGiveawayPaymentOption extends TdObject
{
    public const TYPE_NAME = 'starGiveawayPaymentOption';

    public function __construct(
        /**
         * ISO 4217 currency code for the payment.
         */
        protected string $currency,
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Number of Telegram Stars that will be distributed among winners.
         */
        protected int    $starCount,
        /**
         * Identifier of the store product associated with the option; may be empty if none.
         */
        protected string $storeProductId,
        /**
         * Number of times the chat will be boosted for one year if the option is chosen.
         */
        protected int    $yearlyBoostCount,
        /**
         * Allowed options for the number of giveaway winners.
         *
         * @var StarGiveawayWinnerOption[]
         */
        protected array  $winnerOptions,
        /**
         * True, if the option must be chosen by default.
         */
        protected bool   $isDefault,
        /**
         * True, if the option must be shown only in the full list of payment options.
         */
        protected bool   $isAdditional,
    ) {}

    public static function fromArray(array $array): StarGiveawayPaymentOption
    {
        return new static(
            $array['currency'],
            $array['amount'],
            $array['star_count'],
            $array['store_product_id'],
            $array['yearly_boost_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['winner_options']),
            $array['is_default'],
            $array['is_additional'],
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

    public function getIsAdditional(): bool
    {
        return $this->isAdditional;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    public function getWinnerOptions(): array
    {
        return $this->winnerOptions;
    }

    public function getYearlyBoostCount(): int
    {
        return $this->yearlyBoostCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'currency'           => $this->currency,
            'amount'             => $this->amount,
            'star_count'         => $this->starCount,
            'store_product_id'   => $this->storeProductId,
            'yearly_boost_count' => $this->yearlyBoostCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->winnerOptions),
            'is_default'         => $this->isDefault,
            'is_additional'      => $this->isAdditional,
        ];
    }
}
