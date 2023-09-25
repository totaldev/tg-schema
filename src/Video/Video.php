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
 * Describes a video file
 */
class Video extends TdObject
{
    public const TYPE_NAME = 'video';

    /**
     * Duration of the video, in seconds; as defined by the sender
     *
     * @var int
     */
    protected int $duration;

    /**
     * Original name of the file; as defined by the sender
     *
     * @var string
     */
    protected string $fileName;

    /**
     * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets
     *
     * @var bool
     */
    protected bool $hasStickers;

    /**
     * Video height; as defined by the sender
     *
     * @var int
     */
    protected int $height;

    /**
     * MIME type of the file; as defined by the sender
     *
     * @var string
     */
    protected string $mimeType;

    /**
     * Video minithumbnail; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * True, if the video is supposed to be streamed
     *
     * @var bool
     */
    protected bool $supportsStreaming;

    /**
     * Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    /**
     * File containing the video
     *
     * @var File
     */
    protected File $video;

    /**
     * Video width; as defined by the sender
     *
     * @var int
     */
    protected int $width;

    public function __construct(
        int            $duration,
        int            $width,
        int            $height,
        string         $fileName,
        string         $mimeType,
        bool           $hasStickers,
        bool           $supportsStreaming,
        ?Minithumbnail $minithumbnail,
        ?Thumbnail     $thumbnail,
        File           $video,
    )
    {
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->fileName = $fileName;
        $this->mimeType = $mimeType;
        $this->hasStickers = $hasStickers;
        $this->supportsStreaming = $supportsStreaming;
        $this->minithumbnail = $minithumbnail;
        $this->thumbnail = $thumbnail;
        $this->video = $video;
    }

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
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'duration' => $this->duration,
            'width' => $this->width,
            'height' => $this->height,
            'file_name' => $this->fileName,
            'mime_type' => $this->mimeType,
            'has_stickers' => $this->hasStickers,
            'supports_streaming' => $this->supportsStreaming,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
            'video' => $this->video->typeSerialize(),
        ];
    }
}
