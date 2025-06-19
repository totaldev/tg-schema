<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Alternative;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an alternative re-encoded quality of a video file.
 */
class AlternativeVideo extends TdObject
{
    public const TYPE_NAME = 'alternativeVideo';

    public function __construct(
        /**
         * Unique identifier of the alternative video, which is used in the HLS file.
         */
        protected int    $id,
        /**
         * Video width.
         */
        protected int    $width,
        /**
         * Video height.
         */
        protected int    $height,
        /**
         * Codec used for video file encoding, for example, "h264", "h265", or "av1".
         */
        protected string $codec,
        /**
         * HLS file describing the video.
         */
        protected File   $hlsFile,
        /**
         * File containing the video.
         */
        protected File   $video
    ) {}

    public static function fromArray(array $array): AlternativeVideo
    {
        return new static(
            $array['id'],
            $array['width'],
            $array['height'],
            $array['codec'],
            TdSchemaRegistry::fromArray($array['hls_file']),
            TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function getCodec(): string
    {
        return $this->codec;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getHlsFile(): File
    {
        return $this->hlsFile;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getVideo(): File
    {
        return $this->video;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'id'       => $this->id,
            'width'    => $this->width,
            'height'   => $this->height,
            'codec'    => $this->codec,
            'hls_file' => $this->hlsFile->typeSerialize(),
            'video'    => $this->video->typeSerialize(),
        ];
    }
}
