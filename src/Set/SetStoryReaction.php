<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes chosen reaction on a story
 */
class SetStoryReaction extends TdFunction
{
    public const TYPE_NAME = 'setStoryReaction';

    /**
     * Type of the reaction to set; pass null to remove the reaction. `reactionTypeCustomEmoji` reactions can be used only by Telegram Premium users
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    /**
     * The identifier of the story
     *
     * @var int
     */
    protected int $storyId;

    /**
     * The identifier of the sender of the story
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * Pass true if the reaction needs to be added to recent reactions
     *
     * @var bool
     */
    protected bool $updateRecentReactions;

    public function __construct(
        int          $storySenderChatId,
        int          $storyId,
        ReactionType $reactionType,
        bool         $updateRecentReactions,
    )
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->reactionType = $reactionType;
        $this->updateRecentReactions = $updateRecentReactions;
    }

    public static function fromArray(array $array): SetStoryReaction
    {
        return new static(
            $array['story_sender_chat_id'],
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

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function getUpdateRecentReactions(): bool
    {
        return $this->updateRecentReactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
            'reaction_type' => $this->reactionType->typeSerialize(),
            'update_recent_reactions' => $this->updateRecentReactions,
        ];
    }
}
