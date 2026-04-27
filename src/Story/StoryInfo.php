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
    public const string TYPE_NAME = 'storyInfo';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the story was published.
         */
        protected int  $date,
        /**
         * True, if the story is available only to close friends.
         */
        protected bool $isForCloseFriends,
        /**
         * True, if the story is a live story.
         */
        protected bool $isLive,
        /**
         * Unique story identifier among stories of the chat.
         */
        protected int  $storyId,
    ) {}

    public static function fromArray(array $array): StoryInfo
    {
        return new static(
            date             : $array['date'],
            isForCloseFriends: $array['is_for_close_friends'],
            isLive           : $array['is_live'],
            storyId          : $array['story_id'],
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

    public function getIsLive(): bool
    {
        return $this->isLive;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setIsForCloseFriends(bool $value): static
    {
        $this->isForCloseFriends = $value;

        return $this;
    }

    public function setIsLive(bool $value): static
    {
        $this->isLive = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'date'                 => $this->date,
            'is_for_close_friends' => $this->isForCloseFriends,
            'is_live'              => $this->isLive,
            'story_id'             => $this->storyId,
        ];
    }
}
