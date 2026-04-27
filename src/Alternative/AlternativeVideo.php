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
    public const string TYPE_NAME = 'alternativeVideo';

    public function __construct(
        /**
         * Codec used for video file encoding, for example, "h264", "h265", or "av1".
         */
        protected string $codec,
        /**
         * Video height.
         */
        protected int    $height,
        /**
         * HLS file describing the video.
         */
        protected File   $hlsFile,
        /**
         * Unique identifier of the alternative video, which is used in the HLS file.
         */
        protected int    $id,
        /**
         * File containing the video.
         */
        protected File   $video,
        /**
         * Video width.
         */
        protected int    $width,
    ) {}

    public static function fromArray(array $array): AlternativeVideo
    {
        return new static(
            codec  : $array['codec'],
            height : $array['height'],
            hlsFile: TdSchemaRegistry::fromArray($array['hls_file']),
            id     : $array['id'],
            video  : TdSchemaRegistry::fromArray($array['video']),
            width  : $array['width'],
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

    public function setCodec(string $value): static
    {
        $this->codec = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setHlsFile(File $value): static
    {
        $this->hlsFile = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setVideo(File $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'codec'    => $this->codec,
            'height'   => $this->height,
            'hls_file' => $this->hlsFile->jsonSerialize(),
            'id'       => $this->id,
            'video'    => $this->video->jsonSerialize(),
            'width'    => $this->width,
        ];
    }
}
