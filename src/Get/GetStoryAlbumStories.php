<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of stories added to the given story album. For optimal performance, the number of returned stories is chosen by TDLib.
 */
class GetStoryAlbumStories extends TdFunction
{
    public const string TYPE_NAME = 'getStoryAlbumStories';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Story album identifier.
         */
        protected int $storyAlbumId,
        /**
         * Offset of the first entry to return; use 0 to get results from the first album story.
         */
        protected int $offset,
        /**
         * The maximum number of stories to be returned. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int $limit,
    ) {}

    public static function fromArray(array $array): GetStoryAlbumStories
    {
        return new static(
            $array['chat_id'],
            $array['story_album_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getStoryAlbumId(): int
    {
        return $this->storyAlbumId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setStoryAlbumId(int $value): static
    {
        $this->storyAlbumId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'story_album_id' => $this->storyAlbumId,
            'offset'         => $this->offset,
            'limit'          => $this->limit,
        ];
    }
}
