<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a public repost to a story.
 */
class PublicForwardStory extends PublicForward
{
    public const TYPE_NAME = 'publicForwardStory';

    public function __construct(
        /**
         * Information about the story.
         */
        protected Story $story
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PublicForwardStory
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story']),
        );
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story' => $this->story->typeSerialize(),
        ];
    }
}
