<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes chosen reaction on a story that has already been sent.
 */
class SetStoryReaction extends TdFunction
{
    public const TYPE_NAME = 'setStoryReaction';

    public function __construct(
        /**
         * The identifier of the poster of the story.
         */
        protected int          $storyPosterChatId,
        /**
         * The identifier of the story.
         */
        protected int          $storyId,
        /**
         * Type of the reaction to set; pass null to remove the reaction. Custom emoji reactions can be used only by Telegram Premium users. Paid reactions can't be set.
         */
        protected ReactionType $reactionType,
        /**
         * Pass true if the reaction needs to be added to recent reactions.
         */
        protected bool         $updateRecentReactions,
    ) {}

    public static function fromArray(array $array): SetStoryReaction
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['update_recent_reactions'],
        );
    }

    public function getReactionType(): ReactionType
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

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'story_poster_chat_id'    => $this->storyPosterChatId,
            'story_id'                => $this->storyId,
            'reaction_type'           => $this->reactionType->typeSerialize(),
            'update_recent_reactions' => $this->updateRecentReactions,
        ];
    }
}
