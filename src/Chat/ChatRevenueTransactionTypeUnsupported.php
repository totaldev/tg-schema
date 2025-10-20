<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes an unsupported transaction.
 */
class ChatRevenueTransactionTypeUnsupported extends ChatRevenueTransactionType
{
    public const TYPE_NAME = 'chatRevenueTransactionTypeUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
