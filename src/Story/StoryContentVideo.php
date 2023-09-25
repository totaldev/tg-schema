<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video story
 */
class StoryContentVideo extends StoryContent
{
    public const TYPE_NAME = 'storyContentVideo';

    /**
     * Alternative version of the video in MPEG4 format, encoded by x264 codec; may be null
     *
     * @var StoryVideo|null
     */
    protected ?StoryVideo $alternativeVideo;

    /**
     * The video in MPEG4 format
     *
     * @var StoryVideo
     */
    protected StoryVideo $video;

    public function __construct(StoryVideo $video, ?StoryVideo $alternativeVideo)
    {
        parent::__construct();

        $this->video = $video;
        $this->alternativeVideo = $alternativeVideo;
    }

    public static function fromArray(array $array): StoryContentVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            (isset($array['alternative_video']) ? TdSchemaRegistry::fromArray($array['alternative_video']) : null),
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
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
            'alternative_video' => (isset($this->alternativeVideo) ? $this->alternativeVideo : null),
        ];
    }
}
