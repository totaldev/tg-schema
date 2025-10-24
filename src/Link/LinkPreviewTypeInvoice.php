<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to an invoice.
 */
class LinkPreviewTypeInvoice extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeInvoice';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeInvoice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
