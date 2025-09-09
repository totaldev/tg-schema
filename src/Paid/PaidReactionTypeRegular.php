<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

/**
 * A paid reaction on behalf of the current user.
 */
class PaidReactionTypeRegular extends PaidReactionType
{
    public const TYPE_NAME = 'paidReactionTypeRegular';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidReactionTypeRegular
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
