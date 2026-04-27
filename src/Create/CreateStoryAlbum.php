<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates an album of stories; requires can_edit_stories administrator right for supergroup and channel chats.
 */
class CreateStoryAlbum extends TdFunction
{
    public const string TYPE_NAME = 'createStoryAlbum';

    public function __construct(
        /**
         * Name of the album; 1-12 characters.
         */
        protected string $name,
        /**
         * Identifiers of stories to add to the album; 0-getOption("story_album_story_count_max") identifiers.
         *
         * @var int[]
         */
        protected array  $storyIds,
        /**
         * Identifier of the chat that posted the stories.
         */
        protected int    $storyPosterChatId,
    ) {}

    public static function fromArray(array $array): CreateStoryAlbum
    {
        return new static(
            name             : $array['name'],
            storyIds         : $array['story_ids'],
            storyPosterChatId: $array['story_poster_chat_id'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStoryIds(): array
    {
        return $this->storyIds;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setStoryIds(array $value): static
    {
        $this->storyIds = $value;

        return $this;
    }

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'name'                 => $this->name,
            'story_ids'            => $this->storyIds,
            'story_poster_chat_id' => $this->storyPosterChatId,
        ];
    }
}
