<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes name of an album of stories. If the album is owned by a supergroup or a channel chat, then requires can_edit_stories administrator right in the
 * chat. Returns the changed album.
 */
class SetStoryAlbumName extends TdFunction
{
    public const TYPE_NAME = 'setStoryAlbumName';

    public function __construct(
        /**
         * Identifier of the chat that owns the stories.
         */
        protected int    $chatId,
        /**
         * Identifier of the story album.
         */
        protected int    $storyAlbumId,
        /**
         * New name of the album; 1-12 characters.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): SetStoryAlbumName
    {
        return new static(
            $array['chat_id'],
            $array['story_album_id'],
            $array['name'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStoryAlbumId(): int
    {
        return $this->storyAlbumId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'story_album_id' => $this->storyAlbumId,
            'name'           => $this->name,
        ];
    }
}
