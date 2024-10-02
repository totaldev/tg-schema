<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes purpose of a transaction with a supergroup or a channel.
 */
class ChatTransactionPurpose extends TdObject
{
    public const TYPE_NAME = 'ChatTransactionPurpose';

    public function __construct() {}

    public static function fromArray(array $array): ChatTransactionPurpose
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
