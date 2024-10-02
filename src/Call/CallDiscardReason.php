<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the reason why a call was discarded.
 */
class CallDiscardReason extends TdObject
{
    public const TYPE_NAME = 'CallDiscardReason';

    public function __construct() {}

    public static function fromArray(array $array): CallDiscardReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
