<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a giveaway.
 */
class GiveawayInfo extends TdObject
{
    public const TYPE_NAME = 'GiveawayInfo';

    public function __construct() {}

    public static function fromArray(array $array): GiveawayInfo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
