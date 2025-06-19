<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sent;

use Totaldev\TgSchema\TdObject;

/**
 * Represents content of a gift received by a user or a channel chat.
 */
class SentGift extends TdObject
{
    public const TYPE_NAME = 'SentGift';

    public function __construct() {}

    public static function fromArray(array $array): SentGift
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
