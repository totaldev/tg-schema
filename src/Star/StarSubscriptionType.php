<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of subscription paid in Telegram Stars.
 */
class StarSubscriptionType extends TdObject
{
    public const TYPE_NAME = 'StarSubscriptionType';

    public function __construct() {}

    public static function fromArray(array $array): StarSubscriptionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
