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
    public const string TYPE_NAME = 'inputStoryContentVideo';

    public function __construct(
        /**
         * File identifiers of the stickers added to the video, if applicable.
         *
         * @var int[]
         */
        protected array     $addedStickerFileIds,
        /**
         * Timestamp of the frame, which will be used as video thumbnail.
         */
        protected float     $coverFrameTimestamp,
        /**
         * Precise duration of the video, in seconds; 0-60.
         */
        protected float     $duration,
        /**
         * True, if the video has no sound.
         */
        protected bool      $isAnimation,
        /**
         * Video to be sent. The video size must be 720x1280. The video must be streamable and stored in MPEG4 format, after encoding with H.265 codec and key frames added each second.
         */
        protected InputFile $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryContentVideo
    {
        return new static(
            addedStickerFileIds: $array['added_sticker_file_ids'],
            coverFrameTimestamp: $array['cover_frame_timestamp'],
            duration           : $array['duration'],
            isAnimation        : $array['is_animation'],
            video              : TdSchemaRegistry::fromArray($array['video']),
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

    public function setAddedStickerFileIds(array $value): static
    {
        $this->addedStickerFileIds = $value;

        return $this;
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

    public function setIsAnimation(bool $value): static
    {
        $this->isAnimation = $value;

        return $this;
    }

    public function setVideo(InputFile $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'cover_frame_timestamp'  => $this->coverFrameTimestamp,
            'duration'               => $this->duration,
            'is_animation'           => $this->isAnimation,
            'video'                  => $this->video->jsonSerialize(),
        ];
    }
}
