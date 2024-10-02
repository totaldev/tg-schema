<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The media is a video.
 */
class LinkPreviewAlbumMediaVideo extends LinkPreviewAlbumMedia
{
    public const TYPE_NAME = 'linkPreviewAlbumMediaVideo';

    public function __construct(
        /**
         * Video description.
         */
        protected Video $video
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewAlbumMediaVideo
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
