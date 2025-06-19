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
    public const TYPE_NAME = 'pageBlockVideo';

    public function __construct(
        /**
         * Video file; may be null.
         */
        protected ?Video           $video,
        /**
         * Video caption.
         */
        protected PageBlockCaption $caption,
        /**
         * True, if the video must be played automatically.
         */
        protected bool             $needAutoplay,
        /**
         * True, if the video must be looped.
         */
        protected bool             $isLooped
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVideo
    {
        return new static(
            isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null,
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
            '@type'         => static::TYPE_NAME,
            'video'         => (isset($this->video) ? $this->video : null),
            'caption'       => $this->caption->typeSerialize(),
            'need_autoplay' => $this->needAutoplay,
            'is_looped'     => $this->isLooped,
        ];
    }
}
