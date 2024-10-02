<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The media is a video.
 */
class PaidMediaVideo extends PaidMedia
{
    public const TYPE_NAME = 'paidMediaVideo';

    public function __construct(
        /**
         * The video.
         */
        protected Video $video
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidMediaVideo
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
