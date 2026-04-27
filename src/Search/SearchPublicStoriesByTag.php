<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for public stories containing the given hashtag or cashtag. For optimal performance, the number of returned stories is chosen by TDLib and can be
 * smaller than the specified limit.
 */
class SearchPublicStoriesByTag extends TdFunction
{
    public const string TYPE_NAME = 'searchPublicStoriesByTag';

    public function __construct(
        /**
         * The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Identifier of the chat that posted the stories to search for; pass 0 to search stories in all chats.
         */
        protected int    $storyPosterChatId,
        /**
         * Hashtag or cashtag to search for.
         */
        protected string $tag,
    ) {}

    public static function fromArray(array $array): SearchPublicStoriesByTag
    {
        return new static(
            limit            : $array['limit'],
            offset           : $array['offset'],
            storyPosterChatId: $array['story_poster_chat_id'],
            tag              : $array['tag'],
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

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function getTag(): string
    {
        return $this->tag;
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

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function setTag(string $value): static
    {
        $this->tag = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'limit'                => $this->limit,
            'offset'               => $this->offset,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'tag'                  => $this->tag,
        ];
    }
}
