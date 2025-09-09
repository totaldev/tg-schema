<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a giveaway prize.
 */
class GiveawayPrize extends TdObject
{
    public const TYPE_NAME = 'GiveawayPrize';

    public function __construct() {}

    public static function fromArray(array $array): GiveawayPrize
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
