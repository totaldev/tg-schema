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
         * Google Play purchase token.
         */
        protected string $purchaseToken,
        /**
         * Identifier of the purchased store product.
         */
        protected string $storeProductId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoreTransactionGooglePlay
    {
        return new static(
            packageName   : $array['package_name'],
            purchaseToken : $array['purchase_token'],
            storeProductId: $array['store_product_id'],
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
            'purchase_token'   => $this->purchaseToken,
            'store_product_id' => $this->storeProductId,
        ];
    }
}
