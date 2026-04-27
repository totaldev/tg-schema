<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A payment has been refunded.
 */
class MessagePaymentRefunded extends MessageContent
{
    public const string TYPE_NAME = 'messagePaymentRefunded';

    public function __construct(
        /**
         * Currency for the price of the product.
         */
        protected string        $currency,
        /**
         * Invoice payload; only for bots.
         */
        protected string        $invoicePayload,
        /**
         * Identifier of the previous owner of the Telegram Stars that refunds them.
         */
        protected MessageSender $ownerId,
        /**
         * Provider payment identifier.
         */
        protected string        $providerPaymentChargeId,
        /**
         * Telegram payment identifier.
         */
        protected string        $telegramPaymentChargeId,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int           $totalAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaymentRefunded
    {
        return new static(
            currency               : $array['currency'],
            invoicePayload         : $array['invoice_payload'],
            ownerId                : TdSchemaRegistry::fromArray($array['owner_id']),
            providerPaymentChargeId: $array['provider_payment_charge_id'],
            telegramPaymentChargeId: $array['telegram_payment_charge_id'],
            totalAmount            : $array['total_amount'],
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setInvoicePayload(string $value): static
    {
        $this->invoicePayload = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setProviderPaymentChargeId(string $value): static
    {
        $this->providerPaymentChargeId = $value;

        return $this;
    }

    public function setTelegramPaymentChargeId(string $value): static
    {
        $this->telegramPaymentChargeId = $value;

        return $this;
    }

    public function setTotalAmount(int $value): static
    {
        $this->totalAmount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'currency'                   => $this->currency,
            'invoice_payload'            => $this->invoicePayload,
            'owner_id'                   => $this->ownerId->jsonSerialize(),
            'provider_payment_charge_id' => $this->providerPaymentChargeId,
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'total_amount'               => $this->totalAmount,
        ];
    }
}
