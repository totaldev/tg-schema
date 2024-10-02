<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation message (GIF-style).
 */
class InputMessageAnimation extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageAnimation';

    public function __construct(
        /**
         * Animation file to be sent.
         */
        protected InputFile      $animation,
        /**
         * Animation thumbnail; pass null to skip thumbnail uploading.
         */
        protected InputThumbnail $thumbnail,
        /**
         * File identifiers of the stickers added to the animation, if applicable.
         *
         * @var int[]
         */
        protected array          $addedStickerFileIds,
        /**
         * Duration of the animation, in seconds.
         */
        protected int            $duration,
        /**
         * Width of the animation; may be replaced by the server.
         */
        protected int            $width,
        /**
         * Height of the animation; may be replaced by the server.
         */
        protected int            $height,
        /**
         * Animation caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected FormattedText  $caption,
        /**
         * True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation; not supported in secret chats.
         */
        protected bool           $showCaptionAboveMedia,
        /**
         * True, if the animation preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool           $hasSpoiler,
    ) {
        parent::__construct();
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
            $array['show_caption_above_media'],
            $array['has_spoiler'],
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getAnimation(): InputFile
    {
        return $this->animation;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'animation'                => $this->animation->typeSerialize(),
            'thumbnail'                => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids'   => $this->addedStickerFileIds,
            'duration'                 => $this->duration,
            'width'                    => $this->width,
            'height'                   => $this->height,
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'has_spoiler'              => $this->hasSpoiler,
        ];
    }
}
