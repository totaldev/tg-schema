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
    public const string TYPE_NAME = 'starGiveawayPaymentOption';

    public function __construct(
        /**
         * The amount to pay, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * ISO 4217 currency code for the payment.
         */
        protected string $currency,
        /**
         * True, if the option must be shown only in the full list of payment options.
         */
        protected bool   $isAdditional,
        /**
         * True, if the option must be chosen by default.
         */
        protected bool   $isDefault,
        /**
         * Number of Telegram Stars that will be distributed among winners.
         */
        protected int    $starCount,
        /**
         * Identifier of the store product associated with the option; may be empty if none.
         */
        protected string $storeProductId,
        /**
         * Allowed options for the number of giveaway winners.
         *
         * @var StarGiveawayWinnerOption[]
         */
        protected array  $winnerOptions,
        /**
         * Number of times the chat will be boosted for one year if the option is chosen.
         */
        protected int    $yearlyBoostCount,
    ) {}

    public static function fromArray(array $array): StarGiveawayPaymentOption
    {
        return new static(
            amount          : $array['amount'],
            currency        : $array['currency'],
            isAdditional    : $array['is_additional'],
            isDefault       : $array['is_default'],
            starCount       : $array['star_count'],
            storeProductId  : $array['store_product_id'],
            winnerOptions   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['winner_options']),
            yearlyBoostCount: $array['yearly_boost_count'],
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

    public function setIsAdditional(bool $value): static
    {
        $this->isAdditional = $value;

        return $this;
    }

    public function setIsDefault(bool $value): static
    {
        $this->isDefault = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setStoreProductId(string $value): static
    {
        $this->storeProductId = $value;

        return $this;
    }

    public function setWinnerOptions(array $value): static
    {
        $this->winnerOptions = $value;

        return $this;
    }

    public function setYearlyBoostCount(int $value): static
    {
        $this->yearlyBoostCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'amount'             => $this->amount,
            'currency'           => $this->currency,
            'is_additional'      => $this->isAdditional,
            'is_default'         => $this->isDefault,
            'star_count'         => $this->starCount,
            'store_product_id'   => $this->storeProductId,
            'winner_options'     => array_map(static fn($x) => $x->jsonSerialize(), $this->winnerOptions),
            'yearly_boost_count' => $this->yearlyBoostCount,
        ];
    }
}
