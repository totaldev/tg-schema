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
    public const string TYPE_NAME = 'chatAvailableReactionsSome';

    public function __construct(
        /**
         * The maximum allowed number of reactions per message; 1-11.
         */
        protected int   $maxReactionCount,
        /**
         * The list of reactions.
         *
         * @var ReactionType[]
         */
        protected array $reactions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatAvailableReactionsSome
    {
        return new static(
            maxReactionCount: $array['max_reaction_count'],
            reactions       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
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

    public function setMaxReactionCount(int $value): static
    {
        $this->maxReactionCount = $value;

        return $this;
    }

    public function setReactions(array $value): static
    {
        $this->reactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'max_reaction_count' => $this->maxReactionCount,
            'reactions'          => array_map(static fn($x) => $x->jsonSerialize(), $this->reactions),
        ];
    }
}
