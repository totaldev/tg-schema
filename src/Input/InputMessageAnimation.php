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
    public const string TYPE_NAME = 'inputMessageAnimation';

    public function __construct(
        /**
         * File identifiers of the stickers added to the animation, if applicable.
         *
         * @var int[]
         */
        protected array           $addedStickerFileIds,
        /**
         * Animation file to be sent.
         */
        protected InputFile       $animation,
        /**
         * Duration of the animation, in seconds.
         */
        protected int             $duration,
        /**
         * True, if the animation preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool            $hasSpoiler,
        /**
         * Height of the animation; may be replaced by the server.
         */
        protected int             $height,
        /**
         * True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation; not supported in secret chats.
         */
        protected bool            $showCaptionAboveMedia,
        /**
         * Width of the animation; may be replaced by the server.
         */
        protected int             $width,
        /**
         * Animation caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText  $caption = null,
        /**
         * Animation thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail $thumbnail = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageAnimation
    {
        return new static(
            addedStickerFileIds  : $array['added_sticker_file_ids'],
            animation            : TdSchemaRegistry::fromArray($array['animation']),
            caption              : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            duration             : $array['duration'],
            hasSpoiler           : $array['has_spoiler'],
            height               : $array['height'],
            showCaptionAboveMedia: $array['show_caption_above_media'],
            thumbnail            : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            width                : $array['width'],
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

    public function getCaption(): ?FormattedText
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

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setAddedStickerFileIds(array $value): static
    {
        $this->addedStickerFileIds = $value;

        return $this;
    }

    public function setAnimation(InputFile $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setHasSpoiler(bool $value): static
    {
        $this->hasSpoiler = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setShowCaptionAboveMedia(bool $value): static
    {
        $this->showCaptionAboveMedia = $value;

        return $this;
    }

    public function setThumbnail(?InputThumbnail $value): static
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
            '@type'                    => static::TYPE_NAME,
            'added_sticker_file_ids'   => $this->addedStickerFileIds,
            'animation'                => $this->animation->jsonSerialize(),
            'caption'                  => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'duration'                 => $this->duration,
            'has_spoiler'              => $this->hasSpoiler,
            'height'                   => $this->height,
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'thumbnail'                => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'width'                    => $this->width,
        ];
    }
}
