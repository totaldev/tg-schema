<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Validate;

use Totaldev\TgSchema\Input\InputInvoice;
use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Validates the order information provided by a user and returns the available shipping options for a flexible invoice.
 */
class ValidateOrderInfo extends TdFunction
{
    public const string TYPE_NAME = 'validateOrderInfo';

    public function __construct(
        /**
         * The invoice.
         */
        protected InputInvoice $inputInvoice,
        /**
         * Pass true to save the order information.
         */
        protected bool         $allowSave,
        /**
         * The order information, provided by the user; pass null if empty.
         */
        protected ?OrderInfo   $orderInfo = null,
    ) {}

    public static function fromArray(array $array): ValidateOrderInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_invoice']),
            isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null,
            $array['allow_save'],
        );
    }

    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }

    public function getInputInvoice(): InputInvoice
    {
        return $this->inputInvoice;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function setAllowSave(bool $value): static
    {
        $this->allowSave = $value;

        return $this;
    }

    public function setInputInvoice(InputInvoice $value): static
    {
        $this->inputInvoice = $value;

        return $this;
    }

    public function setOrderInfo(?OrderInfo $value): static
    {
        $this->orderInfo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'input_invoice' => $this->inputInvoice->typeSerialize(),
            'order_info'    => $this->orderInfo ?? null,
            'allow_save'    => $this->allowSave,
        ];
    }
}
