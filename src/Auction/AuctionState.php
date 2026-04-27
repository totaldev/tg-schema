<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes state of an auction.
 */
class AuctionState extends TdObject
{
    public const string TYPE_NAME = 'AuctionState';

    public function __construct() {}

    public static function fromArray(array $array): AuctionState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
