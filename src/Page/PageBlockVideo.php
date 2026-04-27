<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * A video.
 */
class PageBlockVideo extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockVideo';

    public function __construct(
        /**
         * Video caption.
         */
        protected PageBlockCaption $caption,
        /**
         * True, if the video must be looped.
         */
        protected bool             $isLooped,
        /**
         * True, if the video must be played automatically.
         */
        protected bool             $needAutoplay,
        /**
         * Video file; may be null.
         */
        protected ?Video           $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVideo
    {
        return new static(
            caption     : TdSchemaRegistry::fromArray($array['caption']),
            isLooped    : $array['is_looped'],
            needAutoplay: $array['need_autoplay'],
            video       : (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
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

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setIsLooped(bool $value): static
    {
        $this->isLooped = $value;

        return $this;
    }

    public function setNeedAutoplay(bool $value): static
    {
        $this->needAutoplay = $value;

        return $this;
    }

    public function setVideo(?Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'caption'       => $this->caption->jsonSerialize(),
            'is_looped'     => $this->isLooped,
            'need_autoplay' => $this->needAutoplay,
            'video'         => (null !== $this->video ? $this->video->jsonSerialize() : null),
        ];
    }
}
