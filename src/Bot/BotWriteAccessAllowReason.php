<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a reason why a bot was allowed to write messages to the current user.
 */
class BotWriteAccessAllowReason extends TdObject
{
    public const TYPE_NAME = 'BotWriteAccessAllowReason';

    public function __construct() {}

    public static function fromArray(array $array): BotWriteAccessAllowReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
