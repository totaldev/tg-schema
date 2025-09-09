<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

/**
 * An anonymous paid reaction.
 */
class PaidReactionTypeAnonymous extends PaidReactionType
{
    public const TYPE_NAME = 'paidReactionTypeAnonymous';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidReactionTypeAnonymous
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
