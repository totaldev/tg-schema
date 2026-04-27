<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Collectible;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a collectible item and its last purchase.
 */
class CollectibleItemInfo extends TdObject
{
    public const string TYPE_NAME = 'collectibleItemInfo';

    public function __construct(
        /**
         * The paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Cryptocurrency used to pay for the item.
         */
        protected string $cryptocurrency,
        /**
         * The paid amount, in the smallest units of the cryptocurrency.
         */
        protected int    $cryptocurrencyAmount,
        /**
         * Currency for the paid amount.
         */
        protected string $currency,
        /**
         * Point in time (Unix timestamp) when the item was purchased.
         */
        protected int    $purchaseDate,
        /**
         * Individual URL for the item on https://fragment.com.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): CollectibleItemInfo
    {
        return new static(
            amount              : $array['amount'],
            cryptocurrency      : $array['cryptocurrency'],
            cryptocurrencyAmount: $array['cryptocurrency_amount'],
            currency            : $array['currency'],
            purchaseDate        : $array['purchase_date'],
            url                 : $array['url'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getPurchaseDate(): int
    {
        return $this->purchaseDate;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setCryptocurrency(string $value): static
    {
        $this->cryptocurrency = $value;

        return $this;
    }

    public function setCryptocurrencyAmount(int $value): static
    {
        $this->cryptocurrencyAmount = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setPurchaseDate(int $value): static
    {
        $this->purchaseDate = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'amount'                => $this->amount,
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'currency'              => $this->currency,
            'purchase_date'         => $this->purchaseDate,
            'url'                   => $this->url,
        ];
    }
}
