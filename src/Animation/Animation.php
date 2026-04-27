<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Animation;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes an animation file. The animation must be encoded in GIF or MPEG4 format.
 */
class Animation extends TdObject
{
    public const string TYPE_NAME = 'animation';

    public function __construct(
        /**
         * File containing the animation.
         */
        protected File           $animation,
        /**
         * Duration of the animation, in seconds; as defined by the sender.
         */
        protected int            $duration,
        /**
         * Original name of the file; as defined by the sender.
         */
        protected string         $fileName,
        /**
         * True, if stickers were added to the animation. The list of corresponding sticker set can be received using getAttachedStickerSets.
         */
        protected bool           $hasStickers,
        /**
         * Height of the animation.
         */
        protected int            $height,
        /**
         * MIME type of the file, usually "image/gif" or "video/mp4".
         */
        protected string         $mimeType,
        /**
         * Animation minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Animation thumbnail in JPEG or MPEG4 format; may be null.
         */
        protected ?Thumbnail     $thumbnail,
        /**
         * Width of the animation.
         */
        protected int            $width,
    ) {}

    public static function fromArray(array $array): Animation
    {
        return new static(
            animation    : TdSchemaRegistry::fromArray($array['animation']),
            duration     : $array['duration'],
            fileName     : $array['file_name'],
            hasStickers  : $array['has_stickers'],
            height       : $array['height'],
            mimeType     : $array['mime_type'],
            minithumbnail: (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            thumbnail    : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            width        : $array['width'],
        );
    }

    public function getAnimation(): File
    {
        return $this->animation;
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

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setAnimation(File $value): static
    {
        $this->animation = $value;

        return $this;
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

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

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
            '@type'         => static::TYPE_NAME,
            'animation'     => $this->animation->jsonSerialize(),
            'duration'      => $this->duration,
            'file_name'     => $this->fileName,
            'has_stickers'  => $this->hasStickers,
            'height'        => $this->height,
            'mime_type'     => $this->mimeType,
            'minithumbnail' => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'thumbnail'     => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'width'         => $this->width,
        ];
    }
}
