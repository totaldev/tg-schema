<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Creates a link for the given invoice; for bots only
 */
class CreateInvoiceLink extends TdFunction
{
    public const TYPE_NAME = 'createInvoiceLink';

    /**
     * Information about the invoice of the type inputMessageInvoice
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $invoice;

    public function __construct(InputMessageContent $invoice)
    {
        $this->invoice = $invoice;
    }

    public static function fromArray(array $array): CreateInvoiceLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invoice']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invoice' => $this->invoice->typeSerialize(),
        ];
    }

    public function getInvoice(): InputMessageContent
    {
        return $this->invoice;
    }
}
