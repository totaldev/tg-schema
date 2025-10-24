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
    public const string TYPE_NAME = 'getChatStoryInteractions';

    public function __construct(
        /**
         * The identifier of the poster of the story.
         */
        protected int           $storyPosterChatId,
        /**
         * Story identifier.
         */
        protected int           $storyId,
        /**
         * Pass true to get forwards and reposts first, then reactions, then other views; pass false to get interactions sorted just by interaction date.
         */
        protected bool          $preferForwards,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string        $offset,
        /**
         * The maximum number of story interactions to return.
         */
        protected int           $limit,
        /**
         * Pass the default heart reaction or a suggested reaction type to receive only interactions with the specified reaction type; pass null to receive all interactions; reactionTypePaid isn't supported.
         */
        protected ?ReactionType $reactionType = null,
    ) {}

    public static function fromArray(array $array): GetChatStoryInteractions
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            isset($array['reaction_type']) ? TdSchemaRegistry::fromArray($array['reaction_type']) : null,
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setPreferForwards(bool $value): static
    {
        $this->preferForwards = $value;

        return $this;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
            'reaction_type'        => $this->reactionType ?? null,
            'prefer_forwards'      => $this->preferForwards,
            'offset'               => $this->offset,
            'limit'                => $this->limit,
        ];
    }
}
