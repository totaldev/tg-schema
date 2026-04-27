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
    public const string TYPE_NAME = 'storyContentVideo';

    public function __construct(
        /**
         * Alternative version of the video in MPEG4 format, encoded with H.264 codec; may be null.
         */
        protected ?StoryVideo $alternativeVideo,
        /**
         * The video in MPEG4 format.
         */
        protected StoryVideo  $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentVideo
    {
        return new static(
            alternativeVideo: (isset($array['alternative_video']) ? TdSchemaRegistry::fromArray($array['alternative_video']) : null),
            video           : TdSchemaRegistry::fromArray($array['video']),
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

    public function setAlternativeVideo(?StoryVideo $value): static
    {
        $this->alternativeVideo = $value;

        return $this;
    }

    public function setVideo(StoryVideo $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'alternative_video' => (null !== $this->alternativeVideo ? $this->alternativeVideo->jsonSerialize() : null),
            'video'             => $this->video->jsonSerialize(),
        ];
    }
}
