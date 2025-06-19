<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available options for gifting Telegram Premium to a user.
 */
class GetPremiumGiftPaymentOptions extends TdFunction
{
    public const TYPE_NAME = 'getPremiumGiftPaymentOptions';

    public function __construct() {}

    public static function fromArray(array $array): GetPremiumGiftPaymentOptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
