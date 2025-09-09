<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video story.
 */
class InputStoryContentVideo extends InputStoryContent
{
    public const TYPE_NAME = 'inputStoryContentVideo';

    public function __construct(
        /**
         * Video to be sent. The video size must be 720x1280. The video must be streamable and stored in MPEG4 format, after encoding with H.265 codec and key frames added each second.
         */
        protected InputFile $video,
        /**
         * File identifiers of the stickers added to the video, if applicable.
         *
         * @var int[]
         */
        protected array     $addedStickerFileIds,
        /**
         * Precise duration of the video, in seconds; 0-60.
         */
        protected float     $duration,
        /**
         * Timestamp of the frame, which will be used as video thumbnail.
         */
        protected float     $coverFrameTimestamp,
        /**
         * True, if the video has no sound.
         */
        protected bool      $isAnimation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryContentVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            $array['added_sticker_file_ids'],
            $array['duration'],
            $array['cover_frame_timestamp'],
            $array['is_animation'],
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getCoverFrameTimestamp(): float
    {
        return $this->coverFrameTimestamp;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function getIsAnimation(): bool
    {
        return $this->isAnimation;
    }

    public function getVideo(): InputFile
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'video'                  => $this->video->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'duration'               => $this->duration,
            'cover_frame_timestamp'  => $this->coverFrameTimestamp,
            'is_animation'           => $this->isAnimation,
        ];
    }
}
