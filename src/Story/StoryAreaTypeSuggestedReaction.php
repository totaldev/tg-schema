<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a suggested reaction. App needs to show a clickable reaction on the area and call setStoryReaction when the are is clicked.
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
    public const string TYPE_NAME = 'storyAreaTypeSuggestedReaction';

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
        /**
         * Number of times the reaction was added.
         */
        protected int          $totalCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeSuggestedReaction
    {
        return new static(
            isDark      : $array['is_dark'],
            isFlipped   : $array['is_flipped'],
            reactionType: TdSchemaRegistry::fromArray($array['reaction_type']),
            totalCount  : $array['total_count'],
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

    public function getTotalCount(): int
    {
        return $this->totalCount;
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

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'is_dark'       => $this->isDark,
            'is_flipped'    => $this->isFlipped,
            'reaction_type' => $this->reactionType->jsonSerialize(),
            'total_count'   => $this->totalCount,
        ];
    }
}
