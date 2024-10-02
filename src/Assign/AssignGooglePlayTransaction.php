<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Assign;

use Totaldev\TgSchema\Store\StorePaymentPurpose;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs server about a purchase through Google Play. For official applications only.
 */
class AssignGooglePlayTransaction extends TdFunction
{
    public const TYPE_NAME = 'assignGooglePlayTransaction';

    public function __construct(
        /**
         * Application package name.
         */
        protected string              $packageName,
        /**
         * Identifier of the purchased store product.
         */
        protected string              $storeProductId,
        /**
         * Google Play purchase token.
         */
        protected string              $purchaseToken,
        /**
         * Transaction purpose.
         */
        protected StorePaymentPurpose $purpose,
    ) {}

    public static function fromArray(array $array): AssignGooglePlayTransaction
    {
        return new static(
            $array['package_name'],
            $array['store_product_id'],
            $array['purchase_token'],
            TdSchemaRegistry::fromArray($array['purpose']),
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

    public function getPurpose(): StorePaymentPurpose
    {
        return $this->purpose;
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'package_name'     => $this->packageName,
            'store_product_id' => $this->storeProductId,
            'purchase_token'   => $this->purchaseToken,
            'purpose'          => $this->purpose->typeSerialize(),
        ];
    }
}
