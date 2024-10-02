<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The link is a link to a video.
 */
class LinkPreviewTypeVideo extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeVideo';

    public function __construct(
        /**
         * The video description.
         */
        protected Video $video
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
        ];
    }
}
