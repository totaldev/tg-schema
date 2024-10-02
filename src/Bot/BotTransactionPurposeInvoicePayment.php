<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Product\ProductInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * User bought a product from the bot.
 */
class BotTransactionPurposeInvoicePayment extends BotTransactionPurpose
{
    public const TYPE_NAME = 'botTransactionPurposeInvoicePayment';

    public function __construct(
        /**
         * Information about the bought product; may be null if not applicable.
         */
        protected ?ProductInfo $productInfo,
        /**
         * Invoice payload; for bots only.
         */
        protected string       $invoicePayload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotTransactionPurposeInvoicePayment
    {
        return new static(
            isset($array['product_info']) ? TdSchemaRegistry::fromArray($array['product_info']) : null,
            $array['invoice_payload'],
        );
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getProductInfo(): ?ProductInfo
    {
        return $this->productInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'product_info'    => (isset($this->productInfo) ? $this->productInfo : null),
            'invoice_payload' => $this->invoicePayload,
        ];
    }
}
