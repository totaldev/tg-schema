<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a story album. If the album is owned by a supergroup or a channel chat, then requires can_edit_stories administrator right in the chat.
 */
class DeleteStoryAlbum extends TdFunction
{
    public const string TYPE_NAME = 'deleteStoryAlbum';

    public function __construct(
        /**
         * Identifier of the chat that owns the stories.
         */
        protected int $chatId,
        /**
         * Identifier of the story album.
         */
        protected int $storyAlbumId,
    ) {}

    public static function fromArray(array $array): DeleteStoryAlbum
    {
        return new static(
            chatId      : $array['chat_id'],
            storyAlbumId: $array['story_album_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'story_album_id' => $this->storyAlbumId,
        ];
    }
}
