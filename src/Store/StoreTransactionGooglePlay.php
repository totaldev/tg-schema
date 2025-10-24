<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * A purchase through Google Play.
 */
class StoreTransactionGooglePlay extends StoreTransaction
{
    public const string TYPE_NAME = 'storeTransactionGooglePlay';

    public function __construct(
        /**
         * Application package name.
         */
        protected string $packageName,
        /**
         * Identifier of the purchased store product.
         */
        protected string $storeProductId,
        /**
         * Google Play purchase token.
         */
        protected string $purchaseToken,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoreTransactionGooglePlay
    {
        return new static(
            $array['package_name'],
            $array['store_product_id'],
            $array['purchase_token'],
        );
    }

    public function getPackageName(): string
    {
        return $this->packageName;
    }

    public function getPurchaseToken(): string
    {
        return $this->purchaseToken;
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    public function setPackageName(string $value): static
    {
        $this->packageName = $value;

        return $this;
    }

    public function setPurchaseToken(string $value): static
    {
        $this->purchaseToken = $value;

        return $this;
    }

    public function setStoreProductId(string $value): static
    {
        $this->storeProductId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'package_name'     => $this->packageName,
            'store_product_id' => $this->storeProductId,
            'purchase_token'   => $this->purchaseToken,
        ];
    }
}
