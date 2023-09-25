<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an invoice. Call getPaymentForm with the given invoice name to process the link
 */
class InternalLinkTypeInvoice extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeInvoice';

    /**
     * Name of the invoice
     *
     * @var string
     */
    protected string $invoiceName;

    public function __construct(string $invoiceName)
    {
        parent::__construct();

        $this->invoiceName = $invoiceName;
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
            '@type' => static::TYPE_NAME,
            'invoice_name' => $this->invoiceName,
        ];
    }
}
