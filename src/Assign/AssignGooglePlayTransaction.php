<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Assign;

use Totaldev\TgSchema\Store\StorePaymentPurpose;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs server about a purchase through Google Play. For official applications only
 */
class AssignGooglePlayTransaction extends TdFunction
{
    public const TYPE_NAME = 'assignGooglePlayTransaction';

    /**
     * Application package name
     *
     * @var string
     */
    protected string $packageName;

    /**
     * Google Play purchase token
     *
     * @var string
     */
    protected string $purchaseToken;

    /**
     * Transaction purpose
     *
     * @var StorePaymentPurpose
     */
    protected StorePaymentPurpose $purpose;

    /**
     * Identifier of the purchased store product
     *
     * @var string
     */
    protected string $storeProductId;

    public function __construct(
        string              $packageName,
        string              $storeProductId,
        string              $purchaseToken,
        StorePaymentPurpose $purpose,
    )
    {
        $this->packageName = $packageName;
        $this->storeProductId = $storeProductId;
        $this->purchaseToken = $purchaseToken;
        $this->purpose = $purpose;
    }

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
            '@type' => static::TYPE_NAME,
            'package_name' => $this->packageName,
            'store_product_id' => $this->storeProductId,
            'purchase_token' => $this->purchaseToken,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}
