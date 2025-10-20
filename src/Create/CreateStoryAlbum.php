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
    public const TYPE_NAME = 'createStoryAlbum';

    public function __construct(
        /**
         * Identifier of the chat that posted the stories.
         */
        protected int    $storyPosterChatId,
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
    ) {}

    public static function fromArray(array $array): CreateStoryAlbum
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['name'],
            $array['story_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'name'                 => $this->name,
            'story_ids'            => $this->storyIds,
        ];
    }
}
