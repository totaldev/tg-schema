<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an option for buying or upgrading Telegram Premium for self
 */
class PremiumStatePaymentOption extends TdObject
{
    public const TYPE_NAME = 'premiumStatePaymentOption';

    /**
     * True, if this is the currently used Telegram Premium subscription option
     *
     * @var bool
     */
    protected bool $isCurrent;

    /**
     * True, if the payment option can be used to upgrade the existing Telegram Premium subscription
     *
     * @var bool
     */
    protected bool $isUpgrade;

    /**
     * Identifier of the last in-store transaction for the currently used option
     *
     * @var string
     */
    protected string $lastTransactionId;

    /**
     * Information about the payment option
     *
     * @var PremiumPaymentOption
     */
    protected PremiumPaymentOption $paymentOption;

    public function __construct(
        PremiumPaymentOption $paymentOption,
        bool                 $isCurrent,
        bool                 $isUpgrade,
        string               $lastTransactionId,
    )
    {
        $this->paymentOption = $paymentOption;
        $this->isCurrent = $isCurrent;
        $this->isUpgrade = $isUpgrade;
        $this->lastTransactionId = $lastTransactionId;
    }

    public static function fromArray(array $array): PremiumStatePaymentOption
    {
        return new static(
            TdSchemaRegistry::fromArray($array['payment_option']),
            $array['is_current'],
            $array['is_upgrade'],
            $array['last_transaction_id'],
        );
    }

    public function getIsCurrent(): bool
    {
        return $this->isCurrent;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function getLastTransactionId(): string
    {
        return $this->lastTransactionId;
    }

    public function getPaymentOption(): PremiumPaymentOption
    {
        return $this->paymentOption;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'payment_option' => $this->paymentOption->typeSerialize(),
            'is_current' => $this->isCurrent,
            'is_upgrade' => $this->isUpgrade,
            'last_transaction_id' => $this->lastTransactionId,
        ];
    }
}
