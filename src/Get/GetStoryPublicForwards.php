<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns forwards of a story as a message to public chats and reposts by public channels. Can be used only if the story is posted on behalf of the current
 * user or story.can_get_statistics == true. For optimal performance, the number of returned messages and stories is chosen by TDLib.
 */
class GetStoryPublicForwards extends TdFunction
{
    public const TYPE_NAME = 'getStoryPublicForwards';

    public function __construct(
        /**
         * The identifier of the poster of the story.
         */
        protected int    $storyPosterChatId,
        /**
         * The identifier of the story.
         */
        protected int    $storyId,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of messages and stories to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit
    ) {}

    public static function fromArray(array $array): GetStoryPublicForwards
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
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

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
            'offset'               => $this->offset,
            'limit'                => $this->limit,
        ];
    }
}
