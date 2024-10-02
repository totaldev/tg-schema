<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * The paid reaction in a channel chat.
 */
class ReactionTypePaid extends ReactionType
{
    public const TYPE_NAME = 'reactionTypePaid';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionTypePaid
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
