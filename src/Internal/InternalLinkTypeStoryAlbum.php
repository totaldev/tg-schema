<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to an album of stories. Call searchPublicChat with the given username, then call getStoryAlbumStories with the received chat identifier
 * and the given story album identifier, then show the story album if received.
 */
class InternalLinkTypeStoryAlbum extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeStoryAlbum';

    public function __construct(
        /**
         * Username of the owner of the story album.
         */
        protected string $storyAlbumOwnerUsername,
        /**
         * Story album identifier.
         */
        protected int    $storyAlbumId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeStoryAlbum
    {
        return new static(
            $array['story_album_owner_username'],
            $array['story_album_id'],
        );
    }

    public function getStoryAlbumId(): int
    {
        return $this->storyAlbumId;
    }

    public function getStoryAlbumOwnerUsername(): string
    {
        return $this->storyAlbumOwnerUsername;
    }

    public function setStoryAlbumId(int $value): static
    {
        $this->storyAlbumId = $value;

        return $this;
    }

    public function setStoryAlbumOwnerUsername(string $value): static
    {
        $this->storyAlbumOwnerUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'story_album_owner_username' => $this->storyAlbumOwnerUsername,
            'story_album_id'             => $this->storyAlbumId,
        ];
    }
}
