<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of stories that posted by the given chat to its chat page. If from_story_id == 0, then pinned stories are returned first. Then, stories are
 * returned in reverse chronological order (i.e., in order of decreasing story_id). For optimal performance, the number of returned stories is chosen by TDLib.
 */
class GetChatPostedToChatPageStories extends TdFunction
{
    public const TYPE_NAME = 'getChatPostedToChatPageStories';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the story starting from which stories must be returned; use 0 to get results from pinned and the newest story.
         */
        protected int $fromStoryId,
        /**
         * The maximum number of stories to be returned. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): GetChatPostedToChatPageStories
    {
        return new static(
            $array['chat_id'],
            $array['from_story_id'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromStoryId(): int
    {
        return $this->fromStoryId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'from_story_id' => $this->fromStoryId,
            'limit'         => $this->limit,
        ];
    }
}
