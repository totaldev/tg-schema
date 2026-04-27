<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a suggested reaction.
 */
class InputStoryAreaTypeSuggestedReaction extends InputStoryAreaType
{
    public const string TYPE_NAME = 'inputStoryAreaTypeSuggestedReaction';

    public function __construct(
        /**
         * True, if reaction has a dark background.
         */
        protected bool         $isDark,
        /**
         * True, if reaction corner is flipped.
         */
        protected bool         $isFlipped,
        /**
         * Type of the reaction.
         */
        protected ReactionType $reactionType,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypeSuggestedReaction
    {
        return new static(
            isDark      : $array['is_dark'],
            isFlipped   : $array['is_flipped'],
            reactionType: TdSchemaRegistry::fromArray($array['reaction_type']),
        );
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function getIsFlipped(): bool
    {
        return $this->isFlipped;
    }

    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }

    public function setIsDark(bool $value): static
    {
        $this->isDark = $value;

        return $this;
    }

    public function setIsFlipped(bool $value): static
    {
        $this->isFlipped = $value;

        return $this;
    }

    public function setReactionType(ReactionType $value): static
    {
        $this->reactionType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'is_dark'       => $this->isDark,
            'is_flipped'    => $this->isFlipped,
            'reaction_type' => $this->reactionType->jsonSerialize(),
        ];
    }
}
