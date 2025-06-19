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
         * Unique identifier of business connection on behalf of which to send the request.
         */
        protected string              $businessConnectionId,
        /**
         * Information about the invoice of the type inputMessageInvoice.
         */
        protected InputMessageContent $invoice
    ) {}

    public static function fromArray(array $array): CreateInvoiceLink
    {
        return new static(
            $array['business_connection_id'],
            TdSchemaRegistry::fromArray($array['invoice']),
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getInvoice(): InputMessageContent
    {
        return $this->invoice;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'invoice'                => $this->invoice->typeSerialize(),
        ];
    }
}
