<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is outgoing and decreases the number of owned Telegram Stars.
 */
class StarTransactionDirectionOutgoing extends StarTransactionDirection
{
    public const TYPE_NAME = 'starTransactionDirectionOutgoing';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionDirectionOutgoing
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
