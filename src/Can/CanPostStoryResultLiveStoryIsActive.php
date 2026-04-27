<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The user or the chat has an active live story. The live story must be deleted first.
 */
class CanPostStoryResultLiveStoryIsActive extends CanPostStoryResult
{
    public const string TYPE_NAME = 'canPostStoryResultLiveStoryIsActive';

    public function __construct(
        /**
         * Identifier of the active live story.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanPostStoryResultLiveStoryIsActive
    {
        return new static(
            storyId: $array['story_id'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'story_id' => $this->storyId,
        ];
    }
}
