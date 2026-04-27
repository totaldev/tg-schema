<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * A story can be sent.
 */
class CanPostStoryResultOk extends CanPostStoryResult
{
    public const string TYPE_NAME = 'canPostStoryResultOk';

    public function __construct(
        /**
         * Number of stories that can be posted by the user.
         */
        protected int $storyCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanPostStoryResultOk
    {
        return new static(
            storyCount: $array['story_count'],
        );
    }

    public function getStoryCount(): int
    {
        return $this->storyCount;
    }

    public function setStoryCount(int $value): static
    {
        $this->storyCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'story_count' => $this->storyCount,
        ];
    }
}
