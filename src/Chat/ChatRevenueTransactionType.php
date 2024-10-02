<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of transaction for revenue earned from sponsored messages in a chat.
 */
class ChatRevenueTransactionType extends TdObject
{
    public const TYPE_NAME = 'ChatRevenueTransactionType';

    public function __construct() {}

    public static function fromArray(array $array): ChatRevenueTransactionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
