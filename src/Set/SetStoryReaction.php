<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes chosen reaction on a story that has already been sent; not supported for live stories.
 */
class SetStoryReaction extends TdFunction
{
    public const string TYPE_NAME = 'setStoryReaction';

    public function __construct(
        /**
         * The identifier of the story.
         */
        protected int           $storyId,
        /**
         * The identifier of the poster of the story.
         */
        protected int           $storyPosterChatId,
        /**
         * Pass true if the reaction needs to be added to recent reactions.
         */
        protected bool          $updateRecentReactions,
        /**
         * Type of the reaction to set; pass null to remove the reaction. Custom emoji reactions can be used only by Telegram Premium users. Paid reactions can't be set.
         */
        protected ?ReactionType $reactionType = null,
    ) {}

    public static function fromArray(array $array): SetStoryReaction
    {
        return new static(
            reactionType         : (isset($array['reaction_type']) ? TdSchemaRegistry::fromArray($array['reaction_type']) : null),
            storyId              : $array['story_id'],
            storyPosterChatId    : $array['story_poster_chat_id'],
            updateRecentReactions: $array['update_recent_reactions'],
        );
    }

    public function getReactionType(): ?ReactionType
    {
        return $this->reactionType;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function getUpdateRecentReactions(): bool
    {
        return $this->updateRecentReactions;
    }

    public function setReactionType(?ReactionType $value): static
    {
        $this->reactionType = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function setUpdateRecentReactions(bool $value): static
    {
        $this->updateRecentReactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'reaction_type'           => (null !== $this->reactionType ? $this->reactionType->jsonSerialize() : null),
            'story_id'                => $this->storyId,
            'story_poster_chat_id'    => $this->storyPosterChatId,
            'update_recent_reactions' => $this->updateRecentReactions,
        ];
    }
}
