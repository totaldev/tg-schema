<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * A reaction with an emoji.
 */
class ReactionTypeEmoji extends ReactionType
{
    public const TYPE_NAME = 'reactionTypeEmoji';

    public function __construct(
        /**
         * Text representation of the reaction.
         */
        protected string $emoji
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionTypeEmoji
    {
        return new static(
            $array['emoji'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }
}
