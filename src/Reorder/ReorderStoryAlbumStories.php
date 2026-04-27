<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of stories in an album. If the album is owned by a supergroup or a channel chat, then requires can_edit_stories administrator right in the
 * chat. Returns the changed album.
 */
class ReorderStoryAlbumStories extends TdFunction
{
    public const string TYPE_NAME = 'reorderStoryAlbumStories';

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
         * Identifier of the stories to move to the beginning of the album. All other stories are placed in the current order after the specified stories.
         *
         * @var int[]
         */
        protected array $storyIds,
    ) {}

    public static function fromArray(array $array): ReorderStoryAlbumStories
    {
        return new static(
            chatId      : $array['chat_id'],
            storyAlbumId: $array['story_album_id'],
            storyIds    : $array['story_ids'],
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
