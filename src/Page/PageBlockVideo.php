<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * A video
 */
class PageBlockVideo extends PageBlock
{
    public const TYPE_NAME = 'pageBlockVideo';

    /**
     * Video caption
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    /**
     * True, if the video must be looped
     *
     * @var bool
     */
    protected bool $isLooped;

    /**
     * True, if the video must be played automatically
     *
     * @var bool
     */
    protected bool $needAutoplay;

    /**
     * Video file; may be null
     *
     * @var Video|null
     */
    protected ?Video $video;

    public function __construct(?Video $video, PageBlockCaption $caption, bool $needAutoplay, bool $isLooped)
    {
        parent::__construct();

        $this->video = $video;
        $this->caption = $caption;
        $this->needAutoplay = $needAutoplay;
        $this->isLooped = $isLooped;
    }

    public static function fromArray(array $array): PageBlockVideo
    {
        return new static(
            (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['need_autoplay'],
            $array['is_looped'],
        );
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getIsLooped(): bool
    {
        return $this->isLooped;
    }

    public function getNeedAutoplay(): bool
    {
        return $this->needAutoplay;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => (isset($this->video) ? $this->video : null),
            'caption' => $this->caption->typeSerialize(),
            'need_autoplay' => $this->needAutoplay,
            'is_looped' => $this->isLooped,
        ];
    }
}
