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
    public const TYPE_NAME = 'animatedChatPhoto';

    public function __construct(
        /**
         * Animation width and height.
         */
        protected int   $length,
        /**
         * Information about the animation file.
         */
        protected File  $file,
        /**
         * Timestamp of the frame, used as a static chat photo.
         */
        protected float $mainFrameTimestamp
    ) {}

    public static function fromArray(array $array): AnimatedChatPhoto
    {
        return new static(
            $array['length'],
            TdSchemaRegistry::fromArray($array['file']),
            $array['main_frame_timestamp'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'length'               => $this->length,
            'file'                 => $this->file->typeSerialize(),
            'main_frame_timestamp' => $this->mainFrameTimestamp,
        ];
    }
}
