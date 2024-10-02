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
 * Describes a video file sent in a story.
 */
class StoryVideo extends TdObject
{
    public const TYPE_NAME = 'storyVideo';

    public function __construct(
        /**
         * Duration of the video, in seconds.
         */
        protected float          $duration,
        /**
         * Video width.
         */
        protected int            $width,
        /**
         * Video height.
         */
        protected int            $height,
        /**
         * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
         */
        protected bool           $hasStickers,
        /**
         * True, if the video has no sound.
         */
        protected bool           $isAnimation,
        /**
         * Video minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Video thumbnail in JPEG or MPEG4 format; may be null.
         */
        protected ?Thumbnail     $thumbnail,
        /**
         * Size of file prefix, which is supposed to be preloaded, in bytes.
         */
        protected int            $preloadPrefixSize,
        /**
         * Timestamp of the frame used as video thumbnail.
         */
        protected float          $coverFrameTimestamp,
        /**
         * File containing the video.
         */
        protected File           $video,
    ) {}

    public static function fromArray(array $array): StoryVideo
    {
        return new static(
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['has_stickers'],
            $array['is_animation'],
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            $array['preload_prefix_size'],
            $array['cover_frame_timestamp'],
            TdSchemaRegistry::fromArray($array['video']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'duration'              => $this->duration,
            'width'                 => $this->width,
            'height'                => $this->height,
            'has_stickers'          => $this->hasStickers,
            'is_animation'          => $this->isAnimation,
            'minithumbnail'         => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail'             => (isset($this->thumbnail) ? $this->thumbnail : null),
            'preload_prefix_size'   => $this->preloadPrefixSize,
            'cover_frame_timestamp' => $this->coverFrameTimestamp,
            'video'                 => $this->video->typeSerialize(),
        ];
    }
}
