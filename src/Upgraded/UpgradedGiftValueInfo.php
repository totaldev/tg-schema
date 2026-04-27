<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about value of an upgraded gift.
 */
class UpgradedGiftValueInfo extends TdObject
{
    public const string TYPE_NAME = 'upgradedGiftValueInfo';

    public function __construct(
        /**
         * The average sale price in the last month of gifts upgraded from the same gift; in the smallest units of the currency; 0 if there were no such sales.
         */
        protected int    $averageSalePrice,
        /**
         * ISO 4217 currency code of the currency in which the prices are represented.
         */
        protected string $currency,
        /**
         * Number of gifts upgraded from the same gift being resold on Fragment.
         */
        protected int    $fragmentListedGiftCount,
        /**
         * The HTTPS link to the Fragment for the gift; may be empty if there are no such gifts being sold on Fragment.
         */
        protected string $fragmentUrl,
        /**
         * Point in time (Unix timestamp) when the corresponding regular gift was originally purchased.
         */
        protected int    $initialSaleDate,
        /**
         * Initial price of the gift; in the smallest units of the currency.
         */
        protected int    $initialSalePrice,
        /**
         * Amount of Telegram Stars that were paid for the gift.
         */
        protected int    $initialSaleStarCount,
        /**
         * True, if the last sale was completed on Fragment.
         */
        protected bool   $isLastSaleOnFragment,
        /**
         * True, if the value is calculated as average value of similar sold gifts. Otherwise, it is based on the sale price of the gift.
         */
        protected bool   $isValueAverage,
        /**
         * Point in time (Unix timestamp) when the upgraded gift was purchased last time; 0 if never.
         */
        protected int    $lastSaleDate,
        /**
         * Last purchase price of the gift; in the smallest units of the currency; 0 if the gift has never been resold.
         */
        protected int    $lastSalePrice,
        /**
         * The current minimum price of gifts upgraded from the same gift; in the smallest units of the currency; 0 if there are no such gifts.
         */
        protected int    $minimumPrice,
        /**
         * Number of gifts upgraded from the same gift being resold on Telegram.
         */
        protected int    $telegramListedGiftCount,
        /**
         * Estimated value of the gift; in the smallest units of the currency.
         */
        protected int    $value,
    ) {}

    public static function fromArray(array $array): UpgradedGiftValueInfo
    {
        return new static(
            averageSalePrice       : $array['average_sale_price'],
            currency               : $array['currency'],
            fragmentListedGiftCount: $array['fragment_listed_gift_count'],
            fragmentUrl            : $array['fragment_url'],
            initialSaleDate        : $array['initial_sale_date'],
            initialSalePrice       : $array['initial_sale_price'],
            initialSaleStarCount   : $array['initial_sale_star_count'],
            isLastSaleOnFragment   : $array['is_last_sale_on_fragment'],
            isValueAverage         : $array['is_value_average'],
            lastSaleDate           : $array['last_sale_date'],
            lastSalePrice          : $array['last_sale_price'],
            minimumPrice           : $array['minimum_price'],
            telegramListedGiftCount: $array['telegram_listed_gift_count'],
            value                  : $array['value'],
        );
    }

    public function getAverageSalePrice(): int
    {
        return $this->averageSalePrice;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getFragmentListedGiftCount(): int
    {
        return $this->fragmentListedGiftCount;
    }

    public function getFragmentUrl(): string
    {
        return $this->fragmentUrl;
    }

    public function getInitialSaleDate(): int
    {
        return $this->initialSaleDate;
    }

    public function getInitialSalePrice(): int
    {
        return $this->initialSalePrice;
    }

    public function getInitialSaleStarCount(): int
    {
        return $this->initialSaleStarCount;
    }

    public function getIsLastSaleOnFragment(): bool
    {
        return $this->isLastSaleOnFragment;
    }

    public function getIsValueAverage(): bool
    {
        return $this->isValueAverage;
    }

    public function getLastSaleDate(): int
    {
        return $this->lastSaleDate;
    }

    public function getLastSalePrice(): int
    {
        return $this->lastSalePrice;
    }

    public function getMinimumPrice(): int
    {
        return $this->minimumPrice;
    }

    public function getTelegramListedGiftCount(): int
    {
        return $this->telegramListedGiftCount;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setAverageSalePrice(int $value): static
    {
        $this->averageSalePrice = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setFragmentListedGiftCount(int $value): static
    {
        $this->fragmentListedGiftCount = $value;

        return $this;
    }

    public function setFragmentUrl(string $value): static
    {
        $this->fragmentUrl = $value;

        return $this;
    }

    public function setInitialSaleDate(int $value): static
    {
        $this->initialSaleDate = $value;

        return $this;
    }

    public function setInitialSalePrice(int $value): static
    {
        $this->initialSalePrice = $value;

        return $this;
    }

    public function setInitialSaleStarCount(int $value): static
    {
        $this->initialSaleStarCount = $value;

        return $this;
    }

    public function setIsLastSaleOnFragment(bool $value): static
    {
        $this->isLastSaleOnFragment = $value;

        return $this;
    }

    public function setIsValueAverage(bool $value): static
    {
        $this->isValueAverage = $value;

        return $this;
    }

    public function setLastSaleDate(int $value): static
    {
        $this->lastSaleDate = $value;

        return $this;
    }

    public function setLastSalePrice(int $value): static
    {
        $this->lastSalePrice = $value;

        return $this;
    }

    public function setMinimumPrice(int $value): static
    {
        $this->minimumPrice = $value;

        return $this;
    }

    public function setTelegramListedGiftCount(int $value): static
    {
        $this->telegramListedGiftCount = $value;

        return $this;
    }

    public function setValue(int $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'average_sale_price'         => $this->averageSalePrice,
            'currency'                   => $this->currency,
            'fragment_listed_gift_count' => $this->fragmentListedGiftCount,
            'fragment_url'               => $this->fragmentUrl,
            'initial_sale_date'          => $this->initialSaleDate,
            'initial_sale_price'         => $this->initialSalePrice,
            'initial_sale_star_count'    => $this->initialSaleStarCount,
            'is_last_sale_on_fragment'   => $this->isLastSaleOnFragment,
            'is_value_average'           => $this->isValueAverage,
            'last_sale_date'             => $this->lastSaleDate,
            'last_sale_price'            => $this->lastSalePrice,
            'minimum_price'              => $this->minimumPrice,
            'telegram_listed_gift_count' => $this->telegramListedGiftCount,
            'value'                      => $this->value,
        ];
    }
}
