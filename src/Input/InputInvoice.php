<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an invoice to process
 */
class InputInvoice extends TdObject
{
    public const TYPE_NAME = 'InputInvoice';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputInvoice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
