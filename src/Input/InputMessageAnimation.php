<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation message (GIF-style).
 */
class InputMessageAnimation extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageAnimation';

    /**
     * Animation file to be sent
     *
     * @var InputFile
     */
    protected InputFile $animation;

    /**
     * Animation thumbnail; pass null to skip thumbnail uploading
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $thumbnail;

    /**
     * File identifiers of the stickers added to the animation, if applicable
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Duration of the animation, in seconds
     *
     * @var int
     */
    protected int $duration;

    /**
     * Width of the animation; may be replaced by the server
     *
     * @var int
     */
    protected int $width;

    /**
     * Height of the animation; may be replaced by the server
     *
     * @var int
     */
    protected int $height;

    /**
     * Animation caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * True, if the animation preview must be covered by a spoiler animation; not supported in secret chats
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    public function __construct(
        InputFile $animation,
        InputThumbnail $thumbnail,
        array $addedStickerFileIds,
        int $duration,
        int $width,
        int $height,
        FormattedText $caption,
        bool $hasSpoiler,
    ) {
        parent::__construct();

        $this->animation = $animation;
        $this->thumbnail = $thumbnail;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->caption = $caption;
        $this->hasSpoiler = $hasSpoiler;
    }

    public static function fromArray(array $array): InputMessageAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['added_sticker_file_ids'],
            $array['duration'],
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['has_spoiler'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'duration' => $this->duration,
            'width' => $this->width,
            'height' => $this->height,
            'caption' => $this->caption->typeSerialize(),
            'has_spoiler' => $this->hasSpoiler,
        ];
    }

    public function getAnimation(): InputFile
    {
        return $this->animation;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getDuration(): int
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

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }
}
