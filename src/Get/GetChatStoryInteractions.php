<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns interactions with a story posted in a chat. Can be used only if story is posted on behalf of a chat and the user is an administrator in the chat.
 */
class GetChatStoryInteractions extends TdFunction
{
    public const TYPE_NAME = 'getChatStoryInteractions';

    public function __construct(
        /**
         * The identifier of the sender of the story.
         */
        protected int          $storySenderChatId,
        /**
         * Story identifier.
         */
        protected int          $storyId,
        /**
         * Pass the default heart reaction or a suggested reaction type to receive only interactions with the specified reaction type; pass null to receive all interactions; reactionTypePaid isn't supported.
         */
        protected ReactionType $reactionType,
        /**
         * Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date.
         */
        protected bool         $preferForwards,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string       $offset,
        /**
         * The maximum number of story interactions to return.
         */
        protected int          $limit,
    ) {}

    public static function fromArray(array $array): GetChatStoryInteractions
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['prefer_forwards'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getPreferForwards(): bool
    {
        return $this->preferForwards;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id'             => $this->storyId,
            'reaction_type'        => $this->reactionType->typeSerialize(),
            'prefer_forwards'      => $this->preferForwards,
            'offset'               => $this->offset,
            'limit'                => $this->limit,
        ];
    }
}
