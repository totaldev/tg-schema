<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a suggested reaction. App needs to show a clickable reaction on the area and call setStoryReaction when the are is clicked
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
    public const TYPE_NAME = 'storyAreaTypeSuggestedReaction';

    /**
     * True, if reaction has a dark background
     *
     * @var bool
     */
    protected bool $isDark;

    /**
     * True, if reaction corner is flipped
     *
     * @var bool
     */
    protected bool $isFlipped;

    /**
     * Type of the reaction
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    /**
     * Number of times the reaction was added
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(ReactionType $reactionType, int $totalCount, bool $isDark, bool $isFlipped)
    {
        parent::__construct();

        $this->reactionType = $reactionType;
        $this->totalCount = $totalCount;
        $this->isDark = $isDark;
        $this->isFlipped = $isFlipped;
    }

    public static function fromArray(array $array): StoryAreaTypeSuggestedReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['total_count'],
            $array['is_dark'],
            $array['is_flipped'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reaction_type' => $this->reactionType->typeSerialize(),
            'total_count' => $this->totalCount,
            'is_dark' => $this->isDark,
            'is_flipped' => $this->isFlipped,
        ];
    }
}
