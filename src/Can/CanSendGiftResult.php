<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdObject;

/**
 * Describes whether a gift can be sent now by the current user.
 */
class CanSendGiftResult extends TdObject
{
    public const TYPE_NAME = 'CanSendGiftResult';

    public function __construct() {}

    public static function fromArray(array $array): CanSendGiftResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
