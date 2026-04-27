<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story was changed.
 */
class UpdateStory extends Update
{
    public const string TYPE_NAME = 'updateStory';

    public function __construct(
        /**
         * The new information about the story.
         */
        protected Story $story
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStory
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
