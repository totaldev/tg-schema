<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to an invoice. Call getPaymentForm with the given invoice name to process the link.
 */
class InternalLinkTypeInvoice extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeInvoice';

    public function __construct(
        /**
         * Name of the invoice.
         */
        protected string $invoiceName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeInvoice
    {
        return new static(
            $array['invoice_name'],
        );
    }

    public function getInvoiceName(): string
    {
        return $this->invoiceName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'invoice_name' => $this->invoiceName,
        ];
    }
}
