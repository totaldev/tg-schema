<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Active;

/**
 * The chat has an active live story.
 */
class ActiveStoryStateLive extends ActiveStoryState
{
    public const string TYPE_NAME = 'activeStoryStateLive';

    public function __construct(
        /**
         * Identifier of the active live story.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ActiveStoryStateLive
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
