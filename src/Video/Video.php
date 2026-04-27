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
         * Original name of the file; as defined by the sender.
         */
        protected string         $fileName,
        /**
         * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
         */
        protected bool           $hasStickers,
        /**
         * Video height; as defined by the sender.
         */
        protected int            $height,
        /**
         * MIME type of the file; as defined by the sender.
         */
        protected string         $mimeType,
        /**
         * Video minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * True, if the video is expected to be streamed.
         */
        protected bool           $supportsStreaming,
        /**
         * Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null.
         */
        protected ?Thumbnail     $thumbnail,
        /**
         * File containing the video.
         */
        protected File           $video,
        /**
         * Video width; as defined by the sender.
         */
        protected int            $width,
    ) {}

    public static function fromArray(array $array): Video
    {
        return new static(
            duration         : $array['duration'],
            fileName         : $array['file_name'],
            hasStickers      : $array['has_stickers'],
            height           : $array['height'],
            mimeType         : $array['mime_type'],
            minithumbnail    : (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            supportsStreaming: $array['supports_streaming'],
            thumbnail        : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            video            : TdSchemaRegistry::fromArray($array['video']),
            width            : $array['width'],
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
            'file_name'          => $this->fileName,
            'has_stickers'       => $this->hasStickers,
            'height'             => $this->height,
            'mime_type'          => $this->mimeType,
            'minithumbnail'      => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'supports_streaming' => $this->supportsStreaming,
            'thumbnail'          => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'video'              => $this->video->jsonSerialize(),
            'width'              => $this->width,
        ];
    }
}
