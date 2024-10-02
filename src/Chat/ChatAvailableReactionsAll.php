<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * All reactions are available in the chat, excluding the paid reaction and custom reactions in channel chats.
 */
class ChatAvailableReactionsAll extends ChatAvailableReactions
{
    public const TYPE_NAME = 'chatAvailableReactionsAll';

    public function __construct(
        /**
         * The maximum allowed number of reactions per message; 1-11.
         */
        protected int $maxReactionCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatAvailableReactionsAll
    {
        return new static(
            $array['max_reaction_count'],
        );
    }

    public function getMaxReactionCount(): int
    {
        return $this->maxReactionCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'max_reaction_count' => $this->maxReactionCount,
        ];
    }
}
