<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes a video file.
 */
class Video extends TdObject
{
    public const string TYPE_NAME = 'video';

    public function __construct(
        /**
         * Duration of the video, in seconds; as defined by the sender.
         */
        protected int            $duration,
        /**
         * Video width; as defined by the sender.
         */
        protected int            $width,
        /**
         * Video height; as defined by the sender.
         */
        protected int            $height,
        /**
         * Original name of the file; as defined by the sender.
         */
        protected string         $fileName,
        /**
         * MIME type of the file; as defined by the sender.
         */
        protected string         $mimeType,
        /**
         * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
         */
        protected bool           $hasStickers,
        /**
         * True, if the video is expected to be streamed.
         */
        protected bool           $supportsStreaming,
        /**
         * Video minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null.
         */
        protected ?Thumbnail     $thumbnail,
        /**
         * File containing the video.
         */
        protected File           $video,
    ) {}

    public static function fromArray(array $array): Video
    {
        return new static(
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['file_name'],
            $array['mime_type'],
            $array['has_stickers'],
            $array['supports_streaming'],
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getVideo(): File
    {
        return $this->video;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setFileName(string $value): static
    {
        $this->fileName = $value;

        return $this;
    }

    public function setHasStickers(bool $value): static
    {
        $this->hasStickers = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setMimeType(string $value): static
    {
        $this->mimeType = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setSupportsStreaming(bool $value): static
    {
        $this->supportsStreaming = $value;

        return $this;
    }

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

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
            '@type'              => static::TYPE_NAME,
            'duration'           => $this->duration,
            'width'              => $this->width,
            'height'             => $this->height,
            'file_name'          => $this->fileName,
            'mime_type'          => $this->mimeType,
            'has_stickers'       => $this->hasStickers,
            'supports_streaming' => $this->supportsStreaming,
            'minithumbnail'      => $this->minithumbnail ?? null,
            'thumbnail'          => $this->thumbnail ?? null,
            'video'              => $this->video->typeSerialize(),
        ];
    }
}
