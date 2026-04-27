<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The live story was successfully posted.
 */
class StartLiveStoryResultOk extends StartLiveStoryResult
{
    public const string TYPE_NAME = 'startLiveStoryResultOk';

    public function __construct(
        /**
         * The live story.
         */
        protected Story $story
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StartLiveStoryResultOk
    {
        return new static(
            story: TdSchemaRegistry::fromArray($array['story']),
        );
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function setStory(Story $value): static
    {
        $this->story = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story' => $this->story->jsonSerialize(),
        ];
    }
}
