<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is incoming and increases the number of owned Telegram Stars.
 */
class StarTransactionDirectionIncoming extends StarTransactionDirection
{
    public const TYPE_NAME = 'starTransactionDirectionIncoming';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionDirectionIncoming
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
