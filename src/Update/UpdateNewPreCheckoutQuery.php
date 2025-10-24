<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming pre-checkout query; for bots only. Contains full information about a checkout.
 */
class UpdateNewPreCheckoutQuery extends Update
{
    public const string TYPE_NAME = 'updateNewPreCheckoutQuery';

    public function __construct(
        /**
         * Unique query identifier.
         */
        protected int        $id,
        /**
         * Identifier of the user who sent the query.
         */
        protected int        $senderUserId,
        /**
         * Currency for the product price.
         */
        protected string     $currency,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int        $totalAmount,
        /**
         * Invoice payload.
         */
        protected string     $invoicePayload,
        /**
         * Identifier of a shipping option chosen by the user; may be empty if not applicable.
         */
        protected string     $shippingOptionId,
        /**
         * Information about the order; may be null.
         */
        protected ?OrderInfo $orderInfo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewPreCheckoutQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['currency'],
            $array['total_amount'],
            $array['invoice_payload'],
            $array['shipping_option_id'],
            isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null,
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
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

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setInvoicePayload(string $value): static
    {
        $this->invoicePayload = $value;

        return $this;
    }

    public function setOrderInfo(?OrderInfo $value): static
    {
        $this->orderInfo = $value;

        return $this;
    }

    public function setSenderUserId(int $value): static
    {
        $this->senderUserId = $value;

        return $this;
    }

    public function setShippingOptionId(string $value): static
    {
        $this->shippingOptionId = $value;

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
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'sender_user_id'     => $this->senderUserId,
            'currency'           => $this->currency,
            'total_amount'       => $this->totalAmount,
            'invoice_payload'    => $this->invoicePayload,
            'shipping_option_id' => $this->shippingOptionId,
            'order_info'         => $this->orderInfo ?? null,
        ];
    }
}
