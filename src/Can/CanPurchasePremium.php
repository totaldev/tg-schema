<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\Store\StorePaymentPurpose;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether Telegram Premium purchase is possible. Must be called before in-store Premium purchase
 */
class CanPurchasePremium extends TdFunction
{
    public const TYPE_NAME = 'canPurchasePremium';

    /**
     * Transaction purpose
     *
     * @var StorePaymentPurpose
     */
    protected StorePaymentPurpose $purpose;

    public function __construct(StorePaymentPurpose $purpose)
    {
        $this->purpose = $purpose;
    }

    public static function fromArray(array $array): CanPurchasePremium
    {
        return new static(
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getPurpose(): StorePaymentPurpose
    {
        return $this->purpose;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}
