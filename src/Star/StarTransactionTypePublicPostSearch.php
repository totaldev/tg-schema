<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a payment for search of posts in public Telegram channels; for regular users only.
 */
class StarTransactionTypePublicPostSearch extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypePublicPostSearch';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePublicPostSearch
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
