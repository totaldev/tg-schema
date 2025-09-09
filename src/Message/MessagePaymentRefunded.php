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
    public const TYPE_NAME = 'messagePaymentRefunded';

    public function __construct(
        /**
         * Identifier of the previous owner of the Telegram Stars that refunds them.
         */
        protected MessageSender $ownerId,
        /**
         * Currency for the price of the product.
         */
        protected string        $currency,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int           $totalAmount,
        /**
         * Invoice payload; only for bots.
         */
        protected string        $invoicePayload,
        /**
         * Telegram payment identifier.
         */
        protected string        $telegramPaymentChargeId,
        /**
         * Provider payment identifier.
         */
        protected string        $providerPaymentChargeId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaymentRefunded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['currency'],
            $array['total_amount'],
            $array['invoice_payload'],
            $array['telegram_payment_charge_id'],
            $array['provider_payment_charge_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'owner_id'                   => $this->ownerId->typeSerialize(),
            'currency'                   => $this->currency,
            'total_amount'               => $this->totalAmount,
            'invoice_payload'            => $this->invoicePayload,
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'provider_payment_charge_id' => $this->providerPaymentChargeId,
        ];
    }
}
