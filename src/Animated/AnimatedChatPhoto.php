<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Animated;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Animated variant of a chat photo in MPEG4 format.
 */
class AnimatedChatPhoto extends TdObject
{
    public const string TYPE_NAME = 'animatedChatPhoto';

    public function __construct(
        /**
         * Information about the animation file.
         */
        protected File  $file,
        /**
         * Animation width and height.
         */
        protected int   $length,
        /**
         * Timestamp of the frame, used as a static chat photo.
         */
        protected float $mainFrameTimestamp,
    ) {}

    public static function fromArray(array $array): AnimatedChatPhoto
    {
        return new static(
            file              : TdSchemaRegistry::fromArray($array['file']),
            length            : $array['length'],
            mainFrameTimestamp: $array['main_frame_timestamp'],
        );
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getMainFrameTimestamp(): float
    {
        return $this->mainFrameTimestamp;
    }

    public function setFile(File $value): static
    {
        $this->file = $value;

        return $this;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function setMainFrameTimestamp(float $value): static
    {
        $this->mainFrameTimestamp = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'file'                 => $this->file->jsonSerialize(),
            'length'               => $this->length,
            'main_frame_timestamp' => $this->mainFrameTimestamp,
        ];
    }
}
