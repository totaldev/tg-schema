<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * All reactions are available in the chat
 */
class ChatAvailableReactionsAll extends ChatAvailableReactions
{
    public const TYPE_NAME = 'chatAvailableReactionsAll';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatAvailableReactionsAll
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
