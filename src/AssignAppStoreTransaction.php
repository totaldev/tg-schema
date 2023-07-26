<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Informs server about a purchase through App Store. For official applications only
 */
class AssignAppStoreTransaction extends TdFunction
{
    public const TYPE_NAME = 'assignAppStoreTransaction';

    /**
     * App Store receipt
     *
     * @var string
     */
    protected string $receipt;

    /**
     * Transaction purpose
     *
     * @var StorePaymentPurpose
     */
    protected StorePaymentPurpose $purpose;

    public function __construct(string $receipt, StorePaymentPurpose $purpose)
    {
        $this->receipt = $receipt;
        $this->purpose = $purpose;
    }

    public static function fromArray(array $array): AssignAppStoreTransaction
    {
        return new static(
            $array['receipt'],
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'receipt' => $this->receipt,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function getPurpose(): StorePaymentPurpose
    {
        return $this->purpose;
    }
}
