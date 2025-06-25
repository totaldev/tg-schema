<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Input\InputInvoice;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

/**
 * Returns an invoice payment form. This method must be called when the user presses inline button of the type inlineKeyboardButtonTypeBuy, or wants to buy
 * access to media in a messagePaidMedia message.
 */
class GetPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'getPaymentForm';

    public function __construct(
        /**
         * The invoice.
         */
        protected InputInvoice     $inputInvoice,
        /**
         * Preferred payment form theme; pass null to use the default theme.
         */
        protected ?ThemeParameters $theme = null
    ) {}

    public static function fromArray(array $array): GetPaymentForm
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_invoice']),
            isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null,
        );
    }

    public function getInputInvoice(): InputInvoice
    {
        return $this->inputInvoice;
    }

    public function getTheme(): ?ThemeParameters
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'input_invoice' => $this->inputInvoice->typeSerialize(),
            'theme'         => $this->theme ?? null,
        ];
    }
}
