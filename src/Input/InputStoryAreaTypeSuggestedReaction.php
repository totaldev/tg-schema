<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a suggested reaction
 */
class InputStoryAreaTypeSuggestedReaction extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeSuggestedReaction';

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

    public function __construct(ReactionType $reactionType, bool $isDark, bool $isFlipped)
    {
        parent::__construct();

        $this->reactionType = $reactionType;
        $this->isDark = $isDark;
        $this->isFlipped = $isFlipped;
    }

    public static function fromArray(array $array): InputStoryAreaTypeSuggestedReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reaction_type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reaction_type' => $this->reactionType->typeSerialize(),
            'is_dark' => $this->isDark,
            'is_flipped' => $this->isFlipped,
        ];
    }
}
