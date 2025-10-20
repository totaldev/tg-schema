<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of story albums. If the albums are owned by a supergroup or a channel chat, then requires can_edit_stories administrator right in the chat.
 */
class ReorderStoryAlbums extends TdFunction
{
    public const TYPE_NAME = 'reorderStoryAlbums';

    public function __construct(
        /**
         * Identifier of the chat that owns the stories.
         */
        protected int   $chatId,
        /**
         * New order of story albums.
         *
         * @var int[]
         */
        protected array $storyAlbumIds,
    ) {}

    public static function fromArray(array $array): ReorderStoryAlbums
    {
        return new static(
            $array['chat_id'],
            $array['story_album_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getStoryAlbumIds(): array
    {
        return $this->storyAlbumIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'story_album_ids' => $this->storyAlbumIds,
        ];
    }
}
