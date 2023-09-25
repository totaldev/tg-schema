<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Address\Address;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming shipping query; for bots only. Only for invoices with flexible price
 */
class UpdateNewShippingQuery extends Update
{
    public const TYPE_NAME = 'updateNewShippingQuery';

    /**
     * Unique query identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Identifier of the user who sent the query
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Invoice payload
     *
     * @var string
     */
    protected string $invoicePayload;

    /**
     * User shipping address
     *
     * @var Address
     */
    protected Address $shippingAddress;

    public function __construct(int $id, int $senderUserId, string $invoicePayload, Address $shippingAddress)
    {
        parent::__construct();

        $this->id = $id;
        $this->senderUserId = $senderUserId;
        $this->invoicePayload = $invoicePayload;
        $this->shippingAddress = $shippingAddress;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'sender_user_id' => $this->senderUserId,
            'invoice_payload' => $this->invoicePayload,
            'shipping_address' => $this->shippingAddress->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }
}
