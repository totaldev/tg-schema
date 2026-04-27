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
    public const string TYPE_NAME = 'setStoryAlbumName';

    public function __construct(
        /**
         * Identifier of the chat that owns the stories.
         */
        protected int    $chatId,
        /**
         * New name of the album; 1-12 characters.
         */
        protected string $name,
        /**
         * Identifier of the story album.
         */
        protected int    $storyAlbumId,
    ) {}

    public static function fromArray(array $array): SetStoryAlbumName
    {
        return new static(
            chatId      : $array['chat_id'],
            name        : $array['name'],
            storyAlbumId: $array['story_album_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

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
            'name'           => $this->name,
            'story_album_id' => $this->storyAlbumId,
        ];
    }
}
