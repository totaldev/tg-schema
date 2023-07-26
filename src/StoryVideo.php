<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a video file sent in a story
 */
class StoryVideo extends TdObject
{
    public const TYPE_NAME = 'storyVideo';

    /**
     * Duration of the video, in seconds
     *
     * @var float
     */
    protected float $duration;

    /**
     * Video width
     *
     * @var int
     */
    protected int $width;

    /**
     * Video height
     *
     * @var int
     */
    protected int $height;

    /**
     * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets
     *
     * @var bool
     */
    protected bool $hasStickers;

    /**
     * True, if the video has no sound
     *
     * @var bool
     */
    protected bool $isAnimation;

    /**
     * Video minithumbnail; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Video thumbnail in JPEG or MPEG4 format; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    /**
     * Size of file prefix, which is supposed to be preloaded, in bytes
     *
     * @var int
     */
    protected int $preloadPrefixSize;

    /**
     * File containing the video
     *
     * @var File
     */
    protected File $video;

    public function __construct(
        float $duration,
        int $width,
        int $height,
        bool $hasStickers,
        bool $isAnimation,
        ?Minithumbnail $minithumbnail,
        ?Thumbnail $thumbnail,
        int $preloadPrefixSize,
        File $video
    ) {
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->hasStickers = $hasStickers;
        $this->isAnimation = $isAnimation;
        $this->minithumbnail = $minithumbnail;
        $this->thumbnail = $thumbnail;
        $this->preloadPrefixSize = $preloadPrefixSize;
        $this->video = $video;
    }

    public static function fromArray(array $array): StoryVideo
    {
        return new static(
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['has_stickers'],
            $array['is_animation'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            $array['preload_prefix_size'],
            TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'duration' => $this->duration,
            'width' => $this->width,
            'height' => $this->height,
            'has_stickers' => $this->hasStickers,
            'is_animation' => $this->isAnimation,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
            'preload_prefix_size' => $this->preloadPrefixSize,
            'video' => $this->video->typeSerialize(),
        ];
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getIsAnimation(): bool
    {
        return $this->isAnimation;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getPreloadPrefixSize(): int
    {
        return $this->preloadPrefixSize;
    }

    public function getVideo(): File
    {
        return $this->video;
    }
}
