<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes a video file posted as a story.
 */
class StoryVideo extends TdObject
{
    public const string TYPE_NAME = 'storyVideo';

    public function __construct(
        /**
         * Timestamp of the frame used as video thumbnail.
         */
        protected float          $coverFrameTimestamp,
        /**
         * Duration of the video, in seconds.
         */
        protected float          $duration,
        /**
         * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
         */
        protected bool           $hasStickers,
        /**
         * Video height.
         */
        protected int            $height,
        /**
         * True, if the video has no sound.
         */
        protected bool           $isAnimation,
        /**
         * Video minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Size of file prefix, which is expected to be preloaded, in bytes.
         */
        protected int            $preloadPrefixSize,
        /**
         * Video thumbnail in JPEG or MPEG4 format; may be null.
         */
        protected ?Thumbnail     $thumbnail,
        /**
         * File containing the video.
         */
        protected File           $video,
        /**
         * Video width.
         */
        protected int            $width,
    ) {}

    public static function fromArray(array $array): StoryVideo
    {
        return new static(
            coverFrameTimestamp: $array['cover_frame_timestamp'],
            duration           : $array['duration'],
            hasStickers        : $array['has_stickers'],
            height             : $array['height'],
            isAnimation        : $array['is_animation'],
            minithumbnail      : (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            preloadPrefixSize  : $array['preload_prefix_size'],
            thumbnail          : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            video              : TdSchemaRegistry::fromArray($array['video']),
            width              : $array['width'],
        );
    }

    public function getCoverFrameTimestamp(): float
    {
        return $this->coverFrameTimestamp;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getIsAnimation(): bool
    {
        return $this->isAnimation;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getPreloadPrefixSize(): int
    {
        return $this->preloadPrefixSize;
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

    public function setCoverFrameTimestamp(float $value): static
    {
        $this->coverFrameTimestamp = $value;

        return $this;
    }

    public function setDuration(float $value): static
    {
        $this->duration = $value;

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

    public function setIsAnimation(bool $value): static
    {
        $this->isAnimation = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setPreloadPrefixSize(int $value): static
    {
        $this->preloadPrefixSize = $value;

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
            '@type'                 => static::TYPE_NAME,
            'cover_frame_timestamp' => $this->coverFrameTimestamp,
            'duration'              => $this->duration,
            'has_stickers'          => $this->hasStickers,
            'height'                => $this->height,
            'is_animation'          => $this->isAnimation,
            'minithumbnail'         => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'preload_prefix_size'   => $this->preloadPrefixSize,
            'thumbnail'             => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'video'                 => $this->video->jsonSerialize(),
            'width'                 => $this->width,
        ];
    }
}
