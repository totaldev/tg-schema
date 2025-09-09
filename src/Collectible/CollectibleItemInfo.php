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
    public const TYPE_NAME = 'collectibleItemInfo';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the item was purchased.
         */
        protected int    $purchaseDate,
        /**
         * Currency for the paid amount.
         */
        protected string $currency,
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
         * Individual URL for the item on https://fragment.com.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): CollectibleItemInfo
    {
        return new static(
            $array['purchase_date'],
            $array['currency'],
            $array['amount'],
            $array['cryptocurrency'],
            $array['cryptocurrency_amount'],
            $array['url'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'purchase_date'         => $this->purchaseDate,
            'currency'              => $this->currency,
            'amount'                => $this->amount,
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'url'                   => $this->url,
        ];
    }
}
