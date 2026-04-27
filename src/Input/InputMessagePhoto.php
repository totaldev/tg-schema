<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSelfDestructType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo message.
 */
class InputMessagePhoto extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessagePhoto';

    public function __construct(
        /**
         * File identifiers of the stickers added to the photo, if applicable.
         *
         * @var int[]
         */
        protected array                    $addedStickerFileIds,
        /**
         * True, if the photo preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool                     $hasSpoiler,
        /**
         * Photo height.
         */
        protected int                      $height,
        /**
         * Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20.
         */
        protected InputFile                $photo,
        /**
         * True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo; not supported in secret chats.
         */
        protected bool                     $showCaptionAboveMedia,
        /**
         * Photo width.
         */
        protected int                      $width,
        /**
         * Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText           $caption = null,
        /**
         * Photo self-destruct type; pass null if none; private chats only.
         */
        protected ?MessageSelfDestructType $selfDestructType = null,
        /**
         * Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats.
         */
        protected ?InputThumbnail          $thumbnail = null,
        /**
         * Video of the live photo; not supported in secret chats; pass null if the photo isn't a live photo.
         */
        protected ?InputFile               $video = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessagePhoto
    {
        return new static(
            addedStickerFileIds  : $array['added_sticker_file_ids'],
            caption              : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            hasSpoiler           : $array['has_spoiler'],
            height               : $array['height'],
            photo                : TdSchemaRegistry::fromArray($array['photo']),
            selfDestructType     : (isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null),
            showCaptionAboveMedia: $array['show_caption_above_media'],
            thumbnail            : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            video                : (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
            width                : $array['width'],
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function getSelfDestructType(): ?MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getVideo(): ?InputFile
    {
        return $this->video;
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

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

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

    public function setPhoto(InputFile $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setSelfDestructType(?MessageSelfDestructType $value): static
    {
        $this->selfDestructType = $value;

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

    public function setVideo(?InputFile $value): static
    {
        $this->video = $value;

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
            'caption'                  => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'has_spoiler'              => $this->hasSpoiler,
            'height'                   => $this->height,
            'photo'                    => $this->photo->jsonSerialize(),
            'self_destruct_type'       => (null !== $this->selfDestructType ? $this->selfDestructType->jsonSerialize() : null),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'thumbnail'                => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'video'                    => (null !== $this->video ? $this->video->jsonSerialize() : null),
            'width'                    => $this->width,
        ];
    }
}
