<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Validate;

use Totaldev\TgSchema\TdFunction;

/**
 * Validates the order information provided by a user and returns the available shipping options for a flexible invoice
 */
class ValidateOrderInfo extends TdFunction
{
    public const TYPE_NAME = 'validateOrderInfo';

    /**
     * The invoice
     *
     * @var InputInvoice
     */
    protected InputInvoice $inputInvoice;

    /**
     * The order information, provided by the user; pass null if empty
     *
     * @var OrderInfo
     */
    protected OrderInfo $orderInfo;

    /**
     * Pass true to save the order information
     *
     * @var bool
     */
    protected bool $allowSave;

    public function __construct(InputInvoice $inputInvoice, OrderInfo $orderInfo, bool $allowSave)
    {
        $this->inputInvoice = $inputInvoice;
        $this->orderInfo = $orderInfo;
        $this->allowSave = $allowSave;
    }

    public static function fromArray(array $array): ValidateOrderInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_invoice']),
            TdSchemaRegistry::fromArray($array['order_info']),
            $array['allow_save'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'input_invoice' => $this->inputInvoice->typeSerialize(),
            'order_info' => $this->orderInfo->typeSerialize(),
            'allow_save' => $this->allowSave,
        ];
    }

    public function getInputInvoice(): InputInvoice
    {
        return $this->inputInvoice;
    }

    public function getOrderInfo(): OrderInfo
    {
        return $this->orderInfo;
    }

    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }
}
