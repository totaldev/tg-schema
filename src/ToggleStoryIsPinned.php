<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Toggles whether a story is accessible after expiration
 */
class ToggleStoryIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleStoryIsPinned';

    /**
     * Identifier of the story
     *
     * @var int
     */
    protected int $storyId;

    /**
     * Pass true to make the story accessible after expiration; pass false to make it private
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(int $storyId, bool $isPinned)
    {
        $this->storyId = $storyId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): ToggleStoryIsPinned
    {
        return new static(
            $array['story_id'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
