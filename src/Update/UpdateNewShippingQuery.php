<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Address\Address;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming shipping query; for bots only. Only for invoices with flexible price.
 */
class UpdateNewShippingQuery extends Update
{
    public const string TYPE_NAME = 'updateNewShippingQuery';

    public function __construct(
        /**
         * Unique query identifier.
         */
        protected int     $id,
        /**
         * Identifier of the user who sent the query.
         */
        protected int     $senderUserId,
        /**
         * Invoice payload.
         */
        protected string  $invoicePayload,
        /**
         * User shipping address.
         */
        protected Address $shippingAddress,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewShippingQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['invoice_payload'],
            TdSchemaRegistry::fromArray($array['shipping_address']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
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

    public function setSenderUserId(int $value): static
    {
        $this->senderUserId = $value;

        return $this;
    }

    public function setShippingAddress(Address $value): static
    {
        $this->shippingAddress = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'id'               => $this->id,
            'sender_user_id'   => $this->senderUserId,
            'invoice_payload'  => $this->invoicePayload,
            'shipping_address' => $this->shippingAddress->typeSerialize(),
        ];
    }
}
