<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available options for Telegram Stars purchase.
 */
class GetStarPaymentOptions extends TdFunction
{
    public const TYPE_NAME = 'getStarPaymentOptions';

    public function __construct() {}

    public static function fromArray(array $array): GetStarPaymentOptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
