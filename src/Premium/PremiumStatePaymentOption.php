<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an option for buying or upgrading Telegram Premium for self.
 */
class PremiumStatePaymentOption extends TdObject
{
    public const string TYPE_NAME = 'premiumStatePaymentOption';

    public function __construct(
        /**
         * True, if this is the currently used Telegram Premium subscription option.
         */
        protected bool                 $isCurrent,
        /**
         * True, if the payment option can be used to upgrade the existing Telegram Premium subscription.
         */
        protected bool                 $isUpgrade,
        /**
         * Identifier of the last in-store transaction for the currently used option.
         */
        protected string               $lastTransactionId,
        /**
         * Information about the payment option.
         */
        protected PremiumPaymentOption $paymentOption,
    ) {}

    public static function fromArray(array $array): PremiumStatePaymentOption
    {
        return new static(
            isCurrent        : $array['is_current'],
            isUpgrade        : $array['is_upgrade'],
            lastTransactionId: $array['last_transaction_id'],
            paymentOption    : TdSchemaRegistry::fromArray($array['payment_option']),
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

    public function setIsCurrent(bool $value): static
    {
        $this->isCurrent = $value;

        return $this;
    }

    public function setIsUpgrade(bool $value): static
    {
        $this->isUpgrade = $value;

        return $this;
    }

    public function setLastTransactionId(string $value): static
    {
        $this->lastTransactionId = $value;

        return $this;
    }

    public function setPaymentOption(PremiumPaymentOption $value): static
    {
        $this->paymentOption = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'is_current'          => $this->isCurrent,
            'is_upgrade'          => $this->isUpgrade,
            'last_transaction_id' => $this->lastTransactionId,
            'payment_option'      => $this->paymentOption->jsonSerialize(),
        ];
    }
}
