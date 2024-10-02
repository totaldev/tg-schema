<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a link for the given invoice; for bots only.
 */
class CreateInvoiceLink extends TdFunction
{
    public const TYPE_NAME = 'createInvoiceLink';

    public function __construct(
        /**
         * Information about the invoice of the type inputMessageInvoice.
         */
        protected InputMessageContent $invoice
    ) {}

    public static function fromArray(array $array): CreateInvoiceLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invoice']),
        );
    }

    public function getInvoice(): InputMessageContent
    {
        return $this->invoice;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'invoice' => $this->invoice->typeSerialize(),
        ];
    }
}
