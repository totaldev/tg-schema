<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Input\InputInvoice;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

/**
 * Returns an invoice payment form. This method must be called when the user presses inlineKeyboardButtonBuy
 */
class GetPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'getPaymentForm';

    /**
     * The invoice
     *
     * @var InputInvoice
     */
    protected InputInvoice $inputInvoice;

    /**
     * Preferred payment form theme; pass null to use the default theme
     *
     * @var ThemeParameters
     */
    protected ThemeParameters $theme;

    public function __construct(InputInvoice $inputInvoice, ThemeParameters $theme)
    {
        $this->inputInvoice = $inputInvoice;
        $this->theme = $theme;
    }

    public static function fromArray(array $array): GetPaymentForm
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_invoice']),
            TdSchemaRegistry::fromArray($array['theme']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'input_invoice' => $this->inputInvoice->typeSerialize(),
            'theme' => $this->theme->typeSerialize(),
        ];
    }

    public function getInputInvoice(): InputInvoice
    {
        return $this->inputInvoice;
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }
}
