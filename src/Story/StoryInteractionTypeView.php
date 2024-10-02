<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A view of the story.
 */
class StoryInteractionTypeView extends StoryInteractionType
{
    public const TYPE_NAME = 'storyInteractionTypeView';

    public function __construct(
        /**
         * Type of the reaction that was chosen by the viewer; may be null if none.
         */
        protected ?ReactionType $chosenReactionType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryInteractionTypeView
    {
        return new static(
            isset($array['chosen_reaction_type']) ? TdSchemaRegistry::fromArray($array['chosen_reaction_type']) : null,
        );
    }

    public function getChosenReactionType(): ?ReactionType
    {
        return $this->chosenReactionType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chosen_reaction_type' => (isset($this->chosenReactionType) ? $this->chosenReactionType : null),
        ];
    }
}
