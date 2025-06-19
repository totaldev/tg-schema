<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Only specific reactions are available in the chat.
 */
class ChatAvailableReactionsSome extends ChatAvailableReactions
{
    public const TYPE_NAME = 'chatAvailableReactionsSome';

    public function __construct(
        /**
         * The list of reactions.
         *
         * @var ReactionType[]
         */
        protected array $reactions,
        /**
         * The maximum allowed number of reactions per message; 1-11.
         */
        protected int   $maxReactionCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatAvailableReactionsSome
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
            $array['max_reaction_count'],
        );
    }

    public function getMaxReactionCount(): int
    {
        return $this->maxReactionCount;
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->reactions),
            'max_reaction_count' => $this->maxReactionCount,
        ];
    }
}
