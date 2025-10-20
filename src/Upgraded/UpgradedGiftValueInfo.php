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
    public const TYPE_NAME = 'upgradedGiftValueInfo';

    public function __construct(
        /**
         * ISO 4217 currency code of the currency in which the prices are represented.
         */
        protected string $currency,
        /**
         * Estimated value of the gift; in the smallest units of the currency.
         */
        protected int    $value,
        /**
         * True, if the value is calculated as average value of similar sold gifts. Otherwise, it is based on the sale price of the gift.
         */
        protected bool   $isValueAverage,
        /**
         * Point in time (Unix timestamp) when the corresponding regular gift was originally purchased.
         */
        protected int    $initialSaleDate,
        /**
         * Amount of Telegram Stars that were paid for the gift.
         */
        protected int    $initialSaleStarCount,
        /**
         * Initial price of the gift; in the smallest units of the currency.
         */
        protected int    $initialSalePrice,
        /**
         * Point in time (Unix timestamp) when the upgraded gift was purchased last time; 0 if never.
         */
        protected int    $lastSaleDate,
        /**
         * Last purchase price of the gift; in the smallest units of the currency; 0 if the gift has never been resold.
         */
        protected int    $lastSalePrice,
        /**
         * True, if the last sale was completed on Fragment.
         */
        protected bool   $isLastSaleOnFragment,
        /**
         * The current minimum price of gifts upgraded from the same gift; in the smallest units of the currency; 0 if there are no such gifts.
         */
        protected int    $minimumPrice,
        /**
         * The average sale price in the last month of gifts upgraded from the same gift; in the smallest units of the currency; 0 if there were no such sales.
         */
        protected int    $averageSalePrice,
        /**
         * Number of gifts upgraded from the same gift being resold on Telegram.
         */
        protected int    $telegramListedGiftCount,
        /**
         * Number of gifts upgraded from the same gift being resold on Fragment.
         */
        protected int    $fragmentListedGiftCount,
        /**
         * The HTTPS link to the Fragment for the gift; may be empty if there are no such gifts being sold on Fragment.
         */
        protected string $fragmentUrl,
    ) {}

    public static function fromArray(array $array): UpgradedGiftValueInfo
    {
        return new static(
            $array['currency'],
            $array['value'],
            $array['is_value_average'],
            $array['initial_sale_date'],
            $array['initial_sale_star_count'],
            $array['initial_sale_price'],
            $array['last_sale_date'],
            $array['last_sale_price'],
            $array['is_last_sale_on_fragment'],
            $array['minimum_price'],
            $array['average_sale_price'],
            $array['telegram_listed_gift_count'],
            $array['fragment_listed_gift_count'],
            $array['fragment_url'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'currency'                   => $this->currency,
            'value'                      => $this->value,
            'is_value_average'           => $this->isValueAverage,
            'initial_sale_date'          => $this->initialSaleDate,
            'initial_sale_star_count'    => $this->initialSaleStarCount,
            'initial_sale_price'         => $this->initialSalePrice,
            'last_sale_date'             => $this->lastSaleDate,
            'last_sale_price'            => $this->lastSalePrice,
            'is_last_sale_on_fragment'   => $this->isLastSaleOnFragment,
            'minimum_price'              => $this->minimumPrice,
            'average_sale_price'         => $this->averageSalePrice,
            'telegram_listed_gift_count' => $this->telegramListedGiftCount,
            'fragment_listed_gift_count' => $this->fragmentListedGiftCount,
            'fragment_url'               => $this->fragmentUrl,
        ];
    }
}
