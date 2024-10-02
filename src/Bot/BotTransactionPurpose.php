<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;

/**
 * Describes purpose of a transaction with a bot.
 */
class BotTransactionPurpose extends TdObject
{
    public const TYPE_NAME = 'BotTransactionPurpose';

    public function __construct() {}

    public static function fromArray(array $array): BotTransactionPurpose
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
