<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains basic information about a story.
 */
class StoryInfo extends TdObject
{
    public const TYPE_NAME = 'storyInfo';

    public function __construct(
        /**
         * Unique story identifier among stories of the chat.
         */
        protected int  $storyId,
        /**
         * Point in time (Unix timestamp) when the story was published.
         */
        protected int  $date,
        /**
         * True, if the story is available only to close friends.
         */
        protected bool $isForCloseFriends
    ) {}

    public static function fromArray(array $array): StoryInfo
    {
        return new static(
            $array['story_id'],
            $array['date'],
            $array['is_for_close_friends'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsForCloseFriends(): bool
    {
        return $this->isForCloseFriends;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_id'             => $this->storyId,
            'date'                 => $this->date,
            'is_for_close_friends' => $this->isForCloseFriends,
        ];
    }
}
