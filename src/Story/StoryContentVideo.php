<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video story.
 */
class StoryContentVideo extends StoryContent
{
    public const TYPE_NAME = 'storyContentVideo';

    public function __construct(
        /**
         * The video in MPEG4 format.
         */
        protected StoryVideo  $video,
        /**
         * Alternative version of the video in MPEG4 format, encoded with H.264 codec; may be null.
         */
        protected ?StoryVideo $alternativeVideo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            isset($array['alternative_video']) ? TdSchemaRegistry::fromArray($array['alternative_video']) : null,
        );
    }

    public function getAlternativeVideo(): ?StoryVideo
    {
        return $this->alternativeVideo;
    }

    public function getVideo(): StoryVideo
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'video'             => $this->video->typeSerialize(),
            'alternative_video' => $this->alternativeVideo ?? null,
        ];
    }
}
