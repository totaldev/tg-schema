<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of canSendMessageToUser.
 */
class CanSendMessageToUserResult extends TdObject
{
    public const TYPE_NAME = 'CanSendMessageToUserResult';

    public function __construct() {}

    public static function fromArray(array $array): CanSendMessageToUserResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
