<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video story
 */
class InputStoryContentVideo extends InputStoryContent
{
    public const TYPE_NAME = 'inputStoryContentVideo';

    /**
     * Video to be sent. The video size must be 720x1280. The video must be streamable and stored in MPEG4 format, after encoding with x265 codec and key frames added each second
     *
     * @var InputFile
     */
    protected InputFile $video;

    /**
     * File identifiers of the stickers added to the video, if applicable
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Precise duration of the video, in seconds; 0-60
     *
     * @var float
     */
    protected float $duration;

    /**
     * True, if the video has no sound
     *
     * @var bool
     */
    protected bool $isAnimation;

    public function __construct(InputFile $video, array $addedStickerFileIds, float $duration, bool $isAnimation)
    {
        parent::__construct();

        $this->video = $video;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->duration = $duration;
        $this->isAnimation = $isAnimation;
    }

    public static function fromArray(array $array): InputStoryContentVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            $array['added_sticker_file_ids'],
            $array['duration'],
            $array['is_animation'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'duration' => $this->duration,
            'is_animation' => $this->isAnimation,
        ];
    }

    public function getVideo(): InputFile
    {
        return $this->video;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function getIsAnimation(): bool
    {
        return $this->isAnimation;
    }
}
