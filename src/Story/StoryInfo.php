<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains basic information about a story
 */
class StoryInfo extends TdObject
{
    public const TYPE_NAME = 'storyInfo';

    /**
     * Unique story identifier among stories of the given sender
     *
     * @var int
     */
    protected int $storyId;

    /**
     * Point in time (Unix timestamp) when the story was published
     *
     * @var int
     */
    protected int $date;

    /**
     * True, if the story is available only to close friends
     *
     * @var bool
     */
    protected bool $isForCloseFriends;

    public function __construct(int $storyId, int $date, bool $isForCloseFriends)
    {
        $this->storyId = $storyId;
        $this->date = $date;
        $this->isForCloseFriends = $isForCloseFriends;
    }

    public static function fromArray(array $array): StoryInfo
    {
        return new static(
            $array['story_id'],
            $array['date'],
            $array['is_for_close_friends'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
            'date' => $this->date,
            'is_for_close_friends' => $this->isForCloseFriends,
        ];
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsForCloseFriends(): bool
    {
        return $this->isForCloseFriends;
    }
}
