<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available options for Telegram Star giveaway creation.
 */
class GetStarGiveawayPaymentOptions extends TdFunction
{
    public const TYPE_NAME = 'getStarGiveawayPaymentOptions';

    public function __construct() {}

    public static function fromArray(array $array): GetStarGiveawayPaymentOptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
