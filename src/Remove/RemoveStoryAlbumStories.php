<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes stories from an album. If the album is owned by a supergroup or a channel chat, then requires can_edit_stories administrator right in the chat.
 * Returns the changed album.
 */
class RemoveStoryAlbumStories extends TdFunction
{
    public const string TYPE_NAME = 'removeStoryAlbumStories';

    public function __construct(
        /**
         * Identifier of the chat that owns the stories.
         */
        protected int   $chatId,
        /**
         * Identifier of the story album.
         */
        protected int   $storyAlbumId,
        /**
         * Identifier of the stories to remove from the album.
         *
         * @var int[]
         */
        protected array $storyIds,
    ) {}

    public static function fromArray(array $array): RemoveStoryAlbumStories
    {
        return new static(
            $array['chat_id'],
            $array['story_album_id'],
            $array['story_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getStoryAlbumId(): int
    {
        return $this->storyAlbumId;
    }

    public function getStoryIds(): array
    {
        return $this->storyIds;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setStoryAlbumId(int $value): static
    {
        $this->storyAlbumId = $value;

        return $this;
    }

    public function setStoryIds(array $value): static
    {
        $this->storyIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'story_album_id' => $this->storyAlbumId,
            'story_ids'      => $this->storyIds,
        ];
    }
}
